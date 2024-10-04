@extends('admin.layouts.app')
@section('content')
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">

          <div class="row">
               <div class="col-xl-12 col-lg-8 ">
                    <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('PUT') <!-- Tambahkan ini untuk menunjukkan bahwa ini adalah permintaan update -->
                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Edit Produk</h4>
                              </div>
                              <div class="card-body">
                                   <!-- File Upload -->
                                   <div class="dropzone" id="dropzone">
                                        <input name="image" type="file" class="dropify" data-allowed-file-extensions="png jpg gif" data-height="200" />
                                        <div class="dz-message needsclick">
                                             <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                             <h3 class="mt-4">Jatuhkan gambar produk Anda di sini, atau <span class="text-primary">klik untuk menjelajah</span></h3>
                                             <span class="text-muted fs-13">
                                                  Disarankan 1600 x 1200 (4:3). File PNG, JPG, dan GIF diperbolehkan.
                                             </span>
                                        </div>
                                        @if ($product->image)
                                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->nama }}" class="img-fluid mt-2" style="max-width: 100px;">
                                        @endif
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Informasi Produk</h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-lg-6">
                                             <div class="mb-3">
                                                  <label for="nama" class="form-label">Nama Produk</label>
                                                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Produk" value="{{ old('nama', $product->nama) }}" required>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <label for="kategori" class="form-label">Kategori Produk</label>
                                             <select class="form-control" id="kategori" data-choices data-choices-groups data-placeholder="Pilih Kategori" name="kategori" required>
                                                  <option value="gaming handheld" {{ old('kategori', $product->kategori) == 'gaming handheld' ? 'selected' : '' }}>Gaming Handheld</option>
                                                  <option value="laptop" {{ old('kategori', $product->kategori) == 'laptop' ? 'selected' : '' }}>Laptop</option>
                                                  <option value="phones" {{ old('kategori', $product->kategori) == 'phones' ? 'selected' : '' }}>Phones</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <div class="mb-3">
                                                  <label for="spesifikasi" class="form-label">Spesifikasi</label>
                                                  <textarea class="form-control bg-light-subtle" name="spesifikasi" id="spesifikasi" rows="7" placeholder="Masukkan Spesifikasi Produk">{{ old('spesifikasi', $product->spesifikasi) }}</textarea>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <div class="mb-3">
                                                  <label for="description" class="form-label">Deskripsi</label>
                                                  <textarea class="form-control bg-light-subtle" name="description" id="description" rows="7" placeholder="Masukkan Deskripsi Produk">{{ old('description', $product->description) }}</textarea>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-6">
                                             <div class="mb-3">
                                                  <label for="stok" class="form-label">Stok</label>
                                                  <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Jumlah Stok" value="{{ old('stock', $product->stock) }}" required>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <label for="harga" class="form-label">Harga</label>
                                             <div class="input-group mb-3">
                                                  <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                                  <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Produk" value="{{ old('harga', $product->harga) }}" required>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="p-3 bg-light mb-3 rounded">
                              <div class="row justify-content-end g-2">
                                   <div class="col-lg-3">
                                        <button type="submit" class="btn btn-outline-secondary w-100">Perbarui Produk</button>
                                   </div>
                                   <div class="col-lg-2">
                                        <a href="{{ route('dashboard.products') }}" class="btn btn-primary w-100">Batal</a>
                                   </div>
                              </div>
                         </div>
                    </form>

               </div>
          </div>

     </div>
     <!-- End Container Fluid -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->
@endsection

@push('js')
<script>
     $('.dropify').dropify();
</script>
@endpush