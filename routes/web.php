<?php

use App\Http\Controllers\Admin\KullaniciController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// Admin Paneli İçin Yetkilendirme
Route::get('/admin/anasayfa', [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('auth'); 

Route::get('/admin/kullanicilar', [KullaniciController::class, 'index'])->name('admin.users.index');

// Giriş, Kayıt ve Şifre İşlemleri (Herkese Açık)
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/kayit-ol', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/sifremi-unuttum', [AdminController::class, 'resetPassword'])->name('admin.reset-password');

// Kullanıcı İşlemleri
Route::post('/admin/login', [UserController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
Route::post('/admin/kayit-ol', [UserController::class, 'register'])->name('admin.register.post');

