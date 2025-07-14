<?php

use Illuminate\Support\Facades\Route;

// When a user visits the main URL ('/'), show the 'utama' view.
Route::view('/', 'utama')->name('home');

// When a user visits '/kelas', show the 'kelas' view.
Route::view('/kelas', 'kelas')->name('classes');

// When a user visits '/akaun', show the 'akaun' view.
Route::view('/akaun', 'account')->name('account');

// For the logout button, we'll just point it to the homepage for now.
// Later, this will trigger a real logout action.
Route::get('/logout', function () {
    return redirect()->route('home');
})->name('logout');