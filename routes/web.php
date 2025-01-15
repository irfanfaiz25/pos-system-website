<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('layouts.main');
})->name('dashboard.index');

Route::get('/products', function () {
    return view('content.transactions');
})->name('products.index');

Route::get('/transactions', function () {
    return view('content.transactions');
})->name('transactions.index');
