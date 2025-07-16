<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KelasController;

/*
|--------------------------------------------------------------------------
| Laman Awam (Public Routes)
|--------------------------------------------------------------------------
|
| Di sini kita letak semua route untuk laman yang boleh diakses oleh semua.
|
*/

Route::view('/', 'utama')->name('home');
Route::get('/kelas', function () {
    $kelas = \App\Models\Kelas::all();
    return view('kelas', compact('kelas'));
})->name('classes');
Route::view('/akaun', 'akaun')->name('account');


/*
|--------------------------------------------------------------------------
| Route Khas (Admin, Dashboard, etc.)
|--------------------------------------------------------------------------
*/

// Kumpulan route untuk Admin sahaja
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('kelas', KelasController::class);
});

// Route asal dari Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';