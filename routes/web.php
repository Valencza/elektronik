<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.landing.home.index');
})->name('home');
