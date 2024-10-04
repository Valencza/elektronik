<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session; // Tambahkan ini untuk mengimpor Session


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('admin.product.index', compact('products')); // Mengirim data ke view
    }
    

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'spesifikasi' => 'nullable|string',
        'description' => 'nullable|string',
        'stock' => 'required|integer|min:0',
        'harga' => 'required|numeric|min:0',
    ]);

    // Memastikan file tidak null sebelum memanggil extension
    $imageName = null; // Inisialisasi

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('images'), $imageName); // Pindahkan file ke folder images
    }

    // Menyimpan produk
    Product::create([
        'nama' => $request->nama,
        'kategori' => $request->kategori,
        'spesifikasi' => $request->spesifikasi,
        'description' => $request->description,
        'stock' => $request->stock,
        'harga' => $request->harga,
        'image' => isset($imageName) ? 'images/'.$imageName : null,
    ]);

    return redirect()->route('dashboard.products')->with('success', 'Produk berhasil ditambahkan!');
}

// Method untuk menampilkan form edit produk
public function edit($id)
{
    $product = Product::findOrFail($id); // Mengambil produk berdasarkan ID
    return view('admin.product.edit', compact('product')); // Mengembalikan view edit dengan data produk
}

// Method untuk memperbarui produk
public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'spesifikasi' => 'nullable|string',
        'description' => 'nullable|string',
        'stock' => 'required|integer|min:0',
        'harga' => 'required|numeric|min:0',
    ]);

    // Temukan produk berdasarkan ID
    $product = Product::findOrFail($id);
    
    // Simpan nama gambar lama
    $oldImage = $product->image;

    // Inisialisasi variabel nama gambar baru
    $imageName = null;

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($oldImage) {
            // Hapus gambar lama dari direktori
            if (file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage)); // Menghapus file gambar lama
            }
        }

        // Proses upload gambar baru
        $file = $request->file('image');
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('images'), $imageName);
    } else {
        // Jika tidak ada gambar baru, tetap gunakan gambar lama
        $imageName = $oldImage;
    }

    // Update data produk
    $product->update([
        'nama' => $request->nama,
        'kategori' => $request->kategori,
        'spesifikasi' => $request->spesifikasi,
        'description' => $request->description,
        'stock' => $request->stock,
        'harga' => $request->harga,
        'image' => $imageName ? 'images/'.$imageName : $oldImage,
    ]);

    return redirect()->route('dashboard.products')->with('success', 'Produk berhasil diperbarui!');
}

public function destroy($id)
{
    // Temukan produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Hapus file gambar dari storage jika ada
    if ($product->image) {
        // Hapus gambar dari direktori public/images
        $imagePath = public_path($product->image); // Dapatkan path lengkap gambar
        if (file_exists($imagePath)) {
            unlink($imagePath); // Menghapus file gambar
        }
    }

    // Hapus produk
    $product->delete();

    // Set flash message
    Session::flash('success', 'Produk berhasil dihapus!');

    // Redirect ke daftar produk
    return redirect()->route('dashboard.products');
}

public function detail($id)
{
    // Find the product by its ID
    $product = Product::findOrFail($id);

    // Return a view with the product data
    return view('admin.product.detail', compact('product'));
}


}
