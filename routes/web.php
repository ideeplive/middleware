<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
Route::get('/report', function () { return view('report'); })->name('report');
Route::get('/stock', function () { return view('stock'); })->name('stock');
Route::get('/contact', function () { return view('contact'); })->name('contact');
