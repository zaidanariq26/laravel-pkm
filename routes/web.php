<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->middleware(['auth', 'user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout',[SesiController::class,'logout']);
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'] )->middleware(['auth','admin'])->name('admin.dashboard');

Route::get('userdashboard', function(){
    return view('userDashboard');
});

Route::get('/siswa/tampil',[SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/siswa/tambah',[SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/submit',[SiswaController::class, 'submit'])->name('siswa.submit');
Route::get('/siswa/edit/{id}',[SiswaController::class,'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}',[SiswaController::class,'update'])->name('siswa.update');
Route::post('/siswa/delete/{id}',[SiswaController::class,'delete'])->name('siswa.delete');
 