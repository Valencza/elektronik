@extends('admin.layouts.app')
@section('content')
<!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
    <div class="container-xxl my-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="badge bg-success text-light fs-14 py-1 px-2">New Arrival</h4>
                        <p class="mb-1">
                            <div class="fs-24 text-dark fw-medium">{{ $product->nama }}</div>
                        </p>
                        <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center mb-3">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->nama }}" class="avatar-md">
                        </div>
                        <h2 class="fw-medium my-3">{{ number_format($product->harga, 0, ',', '.') }} IDR</h2> <!-- Format harga -->
                        <div class="quantity mt-4 mb-2">
                            <h4 class="text-dark fw-medium mt-3">Stok :</h4>
                            <div class="input-step border bg-body-secondary p-1 mt-1 rounded d-inline-flex overflow-visible">
                                <button type="button" class="minus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">-</button>
                                <input type="number" class="text-dark text-center border-0 bg-body-secondary rounded h-100" value="{{ $product->stock }}" min="0" max="100" readonly="">
                                <button type="button" class="plus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">+</button>
                            </div>
                        </div>
                        <h4 class="text-dark fw-medium">Deskripsi :</h4>
                        <p class="text-muted">{{ $product->description ?? 'Deskripsi tidak tersedia.' }}</p> <!-- Menggunakan data deskripsi -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Spesifikasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <ul class="d-flex flex-column gap-2 list-unstyled fs-14 text-muted mb-0">
                                <li>
                                    <span class="fw-medium text-dark">Spesifikasi:</span>
                                    <span class="mx-2">:</span>
                                    <span>{{ $product->spesifikasi ?? 'Spesifikasi tidak tersedia.' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- End Container Fluid -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->
@endsection
    