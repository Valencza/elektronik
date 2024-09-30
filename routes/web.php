<?php

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
Route::get('/dashboard', function () {
    return view('admin/dashboard/index');
})->name('dashboard');
Route::get('/dashboard/products', function () {
    return view('admin/product/index');
})->name('dashboard.products');
Route::get('/dashboard/products/create', function () {
    return view('admin/product/create');
})->name('dashboard.products.create');
Route::get('/dashboard/products/edit', function () {
    return view('admin/product/edit');
})->name('dashboard.products.edit');