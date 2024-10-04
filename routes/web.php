<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Navbar
Route::get('/', function () {
    return view('user.landing.home.index');
})->name('home');
Route::get('/shop', function () {
    return view('user.landing.shop.index');
})->name('shop');
Route::get('/products', function () {
    return view('user.landing.product.index');
})->name('products');
Route::get('/contacts', function () {
    return view('user.landing.contact-us.index');
})->name('contacts');
Route::get('/wishlist', function () {
    return view('user.landing.wishlist.index');
})->name('wishlists');
Route::get('/checkout', function () {
    return view('user.landing.checkout.index');
})->name('checkout');
Route::get('/payment-confirmation', function () {
    return view('user.landing.payment.payment-confirmation');
})->name('payment-confirmation');
Route::get('/payment-failure', function () {
    return view('user.landing.payment.payment-failure');
})->name('payment-failure');
Route::get('/cart', function () {
    return view('user.landing.cart.index');
})->name('cart');

// Dashboard Customer
Route::get('/account/address', function () {
    return view('user.landing.my-account.address');
})->name('account.address');
Route::get('/account/index', function () {
    return view('user.landing.my-account.index');
})->name('account.index');
Route::get('/account/orders-details', function () {
    return view('user.landing.my-account.orders-details');
})->name('account.orders-details');
Route::get('/account/orders', function () {
    return view('user.landing.my-account.orders');
})->name('account.orders');
Route::get('/account/wishlist', function () {
    return view('user.landing.my-account.wishlist');
})->name('account.wishlist');

//DASHBOARD ADMIN

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('admin/dashboard/index');
})->name('dashboard');

//dashboard products
Route::get('/dashboard/products', [ProductController::class, 'index'])->name('dashboard.products');
Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create');
Route::post('/dashboard/products/store', [ProductController::class, 'store'])->name('dashboard.products.store');
Route::get('/dashboard/products/{id}/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit');
Route::put('/dashboard/products/{id}', [ProductController::class, 'update'])->name('dashboard.products.update');
Route::delete('/dashboard/products/{id}', [ProductController::class, 'destroy'])->name('dashboard.products.destroy');
Route::get('/dashboard/products/{id}', [ProductController::class, 'detail'])->name('dashboard.products.detail');


//dashboard category
Route::get('/dashboard/category/index', function () {
    return view('admin/category/index');
})->name('dashboard.category.index');
Route::get('/dashboard/category/edit', function () {
    return view('admin/category/edit');
})->name('dashboard.category.edit');
Route::get('/dashboard/category/create', function () {
    return view('admin/category/create');
})->name('dashboard.category.create');

//dashboard orders
Route::get('/dashboard/orders/index', function () {
    return view('admin/orders/index');
})->name('dashboard.orders.index');
Route::get('/dashboard/orders/edit', function () {
    return view('admin/orders/edit');
})->name('dashboard.orders.edit');
Route::get('/dashboard/orders/details', function () {
    return view('admin/orders/details');
})->name('dashboard.orders.details');
Route::get('/dashboard/orders/cart', function () {
    return view('admin/orders/cart');
})->name('dashboard.orders.cart');
Route::get('/dashboard/orders/checkout', function () {
    return view('admin/orders/checkout');
})->name('dashboard.orders.checkout');

//dashboard purchases
Route::get('/dashboard/purchases/index', function () {
    return view('admin/purchases/index');
})->name('dashboard.purchases.index');
Route::get('/dashboard/purchases/orders', function () {
    return view('admin/purchases/orders');
})->name('dashboard.purchases.orders');
Route::get('/dashboard/purchases/return', function () {
    return view('admin/purchases/return');
})->name('dashboard.purchases.return');

//dashboard attributes
Route::get('/dashboard/attributes/index', function () {
    return view('admin/attributes/index');
})->name('dashboard.attributes.index');
Route::get('/dashboard/attributes/create', function () {
    return view('admin/attributes/create');
})->name('dashboard.attributes.create');
Route::get('/dashboard/attributes/edit', function () {
    return view('admin/attributes/edit');
})->name('dashboard.attributes.edit');

//dashboard invoice
Route::get('/dashboard/invoice/index', function () {
    return view('admin/invoice/index');
})->name('dashboard.invoice.index');
Route::get('/dashboard/invoice/details', function () {
    return view('admin/invoice/details');
})->name('dashboard.invoice.details');

//dashboard account
Route::get('/dashboard/account/index', function () {
    return view('admin/account/index');
})->name('dashboard.account.index');
Route::get('/dashboard/account/details', function () {
    return view('admin/account/details');
})->name('dashboard.account.details');

//dashboard roles
Route::get('/dashboard/roles/index', function () {
    return view('admin/roles/index');
})->name('dashboard.roles.index');
Route::get('/dashboard/roles/edit', function () {
    return view('admin/roles/edit');
})->name('dashboard.roles.edit');