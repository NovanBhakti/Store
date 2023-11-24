<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('layouts.app');
})->name('app');

Route::get('/emailforuser', function () {
    return view('emailforuser');
})->name('pagebreak');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('registrasi.submit');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_action'])->name('login.action');

Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/registrasi', [RegistrasiController::class, 'submit'])->name('registrasi.submit');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/marketplace', function () {
        return view('marketplace');
    })->name('marketplace');
    Route::get('/productDetail', function () {
        return view('productDetail');
    })->name('detail');
});