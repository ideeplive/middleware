<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('construction');

Route::get('/contact', function () { return view('contact'); })->name('contact');

// Group Middleware
Route::middleware(['construction'])->group(function(){
    Route::get('/report', function () { return view('report'); })->name('report');
    Route::get('/stock', function () { return view('stock'); })->name('stock');
});