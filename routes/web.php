<?php

use Illuminate\Support\Facades\Route;
use App\Models\Borrow;
use App\Models\Book;
use App\Http\Controllers\bookController;
use App\Http\Controllers\borrowController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route::get('admin-login', [authController::class, 'showLoginForm']);

// Route::post('admin-login', [authController::class, 'login']);

Route::resource('book', bookController::class);

Route::resource('borrow', borrowController::class);

Route::get('user', [borrowController::class, 'borrow']);

Route::post('/user', [borrowController::class, 'form'])->name('admin');

Route::get('dashboard', [borrowController::class, 'index']);

Route::post('/dashboard', [borrowController::class, 'destroy'])->name('dashboard');

Route::get('buku', [bookController::class, 'index'] )->name('buku');

Route::get('tambah', [bookController::class, 'tambah']);

Route::get('edit-buku', [bookController::class, 'edit']);

Route::post('/update', [bookController::class, 'update']);

Route::post('/tambah', [bookController::class, 'store']);

Route::post('/buku', [bookController::class, 'destroy']);

// Route::get('admin-login', [authController::class, 'showLoginForm'])->name('login');

// Route::post('/login-proces', [authController::class, 'login_proces'])->name('login-proces');

Route::get('user-login', function () {
    return view('userLogin', [
        'title' => 'Siswa'
    ]);
});

Route::get('admin-login', function () {
    return view('adminLogin', [
        'title' => 'Admin'
    ]);
});



//Login Dan Register

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

