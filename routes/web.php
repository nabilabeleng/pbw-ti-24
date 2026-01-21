<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK (TANPA LOGIN)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');      // HOME (landing page)
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| HALAMAN YANG WAJIB LOGIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
});

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN, REGISTER, LOGOUT)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
