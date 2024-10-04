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
                              <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
                         @csrf
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Tambahkan Produk</h4>
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
                                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Produk">
                                                       </div>
                                             </div>
                                             <div class="col-lg-6">
                                                       <label for="kategori" class="form-label">Kategori Produk</label>
                                                       <select class="form-control" id="kategori" data-choices data-choices-groups data-placeholder="Pilih Kategori" name="kategori">
                                                            <option value="gaming handheld">Gaming Handheld</option>
                                                            <option value="laptop">Laptop</option>
                                                            <option value="phones">Phones</option>
                                                       </select>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="spesifikasi" class="form-label">Spesifikasi</label>
                                                       <textarea class="form-control bg-light-subtle" name="spesifikasi" id="spesifikasi" rows="7" placeholder="Masukkan Spesifikasi Produk"></textarea>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="description" class="form-label">Deskripsi</label>
                                                       <textarea class="form-control bg-light-subtle" name="description" id="description" rows="7" placeholder="Masukkan Deskripsi Produk"></textarea>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="stok" class="form-label">Stok</label>
                                                            <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Jumlah Stok">
                                                       </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <label for="harga" class="form-label">Harga</label>
                                                       <div class="input-group mb-3">
                                                            <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                                            <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Produk">
                                                       </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="p-3 bg-light mb-3 rounded">
                                   <div class="row justify-content-end g-2">
                                        <div class="col-lg-3">
                                             <button class="btn btn-outline-secondary w-100">Tambahkan Produk</button>
                                        </div>
                                        <div class="col-lg-2">
                                             <button class="btn btn-primary w-100">Batal</button>
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