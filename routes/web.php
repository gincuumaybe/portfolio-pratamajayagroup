<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/photos', [PhotoController::class, 'index'])->name('admin.photos');
    Route::post('/admin/photos/{id}', [PhotoController::class, 'update'])->name('admin.photos.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
