<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('shop-detail');
});

Route::get('/role', function () {
    return view('role');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/reg2', function () {
    return view('register-view-mahasiswa2');
});

Route::get('/reg3', function () {
    return view('register-view-penjual2');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register-view-mahasiswa', [AuthController::class, 'indexMahasiswa'])->name('view.register.mahasiswa');
Route::post('/register-mahasiswa', [AuthController::class, 'storeMahasiswa'])->name('register.submit.mahasiswa');

Route::get('/register-view-penjual', [AuthController::class, 'indexPenjual'])->name('view.register.penjual');
Route::post('register-penjual', [AuthController::class, 'storePenjual'])->name('register.submit.penjual');

Route::get('/index', [AuthController::class, 'viewIndex'])->name('view.index');

Route::post('/loginsubmit', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['mahasiswa'])->group(function () {
    Route::get('/view-mahasiswa', [AuthController::class, 'viewMahasiswa'])->name('view.mahasiswa');
});

Route::middleware(['penjual'])->group(function () {
    Route::get('/view-penjual', [AuthController::class, 'viewPenjual'])->name('view.penjual');
});
