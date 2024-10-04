@extends('admin.layouts.app')
@section('content')
<style>
     .table-responsive .table td {
          white-space: normal;
          word-wrap: break-word;
          max-width: 200px;
     }
</style>
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-fluid">

          <div class="row">
               <div class="col-xl-12">
                    <div class="card">
                         <div class="card-header d-flex justify-content-between align-items-center gap-1">
                              <h4 class="card-title flex-grow-1">All Product List</h4>

                              <a href="{{route ('dashboard.products.create') }}" class="btn btn-sm btn-primary">
                                   Add Product
                              </a>

                              <div class="dropdown">
                                   <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                        This Month
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="#!" class="dropdown-item">Export</a>
                                   </div>
                              </div>
                         </div>
                         <div>
                              <div class="table-responsive">
                                   <table class="table align-middle mb-0 table-hover table-centered">
                                        <thead class="bg-light-subtle">
                                             <tr>
                                                  <th style="width: 20px;">
                                                       <div class="form-check ms-1">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1"></label>
                                                       </div>
                                                  </th>
                                                  <th>Nama Produk</th>
                                                  <th>Harga</th>
                                                  <th>Stok</th>
                                                  <th>Kategori</th>
                                                  <th>Deksripsi</th>
                                                  <th>Spesifikasi</th>
                                                  <th>Tindakan</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($products as $product)
                                             <tr>
                                                  <td>
                                                       <div class="form-check ms-1">
                                                            <input type="checkbox" class="form-check-input" id="customCheck{{ $product->id }}">
                                                            <label class="form-check-label" for="customCheck{{ $product->id }}">&nbsp;</label>
                                                       </div>
                                                  </td>''
                                                  <td>
                                                       <div class="d-flex align-items-center gap-2">
                                                            <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                 <img src="{{ asset('images/' . $product->image) }}" alt="terlalu-besar" class="avatar-md">
                                                            </div>
                                                            <div>
                                                                 <a href="{{ route('dashboard.products.detail', $product->id) }}" class="text-dark fw-medium fs-15">{{ $product->nama }}</a>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>{{ number_format($product->harga, 2, ',', '.') }}</td>
                                                  <td>{{ $product->stock }}</td>
                                                  <td>{{ $product->kategori }}</td>
                                                  <td>{{ $product->description }}</td>
                                                  <td>{{ $product->spesifikasi }}</td>
                                                  <td>
                                                       <div class="d-flex gap-2">
                                                            <a href="{{ route('dashboard.products.detail', ['id' => $product->id]) }}" class="btn btn-light btn-sm">
                                                                 <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                            <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-soft-primary btn-sm">
                                                                 <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                            <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="post">
                                                                 @csrf
                                                                 @method('DELETE')
                                                                 <button href="#!" class="btn btn-soft-danger btn-sm">
                                                                      <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                                 </button>
                                                            </form>

                                                       </div>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>

                                   </table>
                              </div>
                              <!-- end table-responsive -->
                         </div>
                         <div class="card-footer border-top">
                              <nav aria-label="Page navigation example">
                                   <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                   </ul>
                              </nav>
                         </div>
                    </div>
               </div>

          </div>

     </div>
     <!-- End Container Fluid -->

     <!-- ========== Footer Start ========== -->
     <footer class="footer">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-12 text-center">
                         <script>
                              document.write(new Date().getFullYear())
                         </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                              href="#" class="fw-bold footer-text" target="_blank">Techzaa</a>
                    </div>
               </div>
          </div>
     </footer>
     <!-- ========== Footer End ========== -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->
@endsection

@push('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
     // Menangkap semua tombol hapus
     document.querySelectorAll('.btn-soft-danger').forEach(button => {
          button.addEventListener('click', function(event) {
               event.preventDefault(); // Mencegah pengiriman form langsung

               const form = this.closest('form'); // Mendapatkan form terdekat

               // Menampilkan konfirmasi SweetAlert
               swal({
                         title: "Apakah Anda yakin?",
                         text: "Anda tidak dapat memulihkan data yang dihapus!",
                         icon: "warning",
                         buttons: true,
                         dangerMode: true,
                    })
                    .then((willDelete) => {
                         if (willDelete) {
                              form.submit(); // Mengirim form jika pengguna mengkonfirmasi
                         }
                    });
          });
     });
</script>
@endpush