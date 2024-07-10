<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPeminjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', function () {
    return view('user.beranda');
  });
  Route::get('/ruangan', [RoomController::class, 'index'])->name('ruangan.cari');
  Route::get('/riwayat', [BorrowingController::class, 'index'])->name('peminjaman.index');
  Route::get('/peminjaman/{id}', [BorrowingController::class, 'create'])->name('peminjaman.create');
  Route::post('/peminjaman', [BorrowingController::class, 'store'])->name('peminjaman.store');
  Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'admin'], function () {
  Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
  Route::get('/peminjaman-ruangan', [AdminPeminjamanController::class, 'index']);
  Route::post('/peminjaman-ruangan/approve/{borrowingId}', [AdminPeminjamanController::class, 'approveBorrowing'])->name('approve.borrowing');
  Route::post('/peminjaman-ruangan/reject/{borrowingId}', [AdminPeminjamanController::class, 'rejectBorrowing'])->name('reject.borrowing');
});
