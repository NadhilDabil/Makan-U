<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/role', function () {
    return view('role');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register-option', [AuthController::class, 'viewRegister'])->name('view.register');
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

    Route::get('/form-toko', [TokoController::class, 'viewForm'])->name('view.form.penjual');
    Route::post('/form-toko/submit', [TokoController::class, 'storeToko'])->name('submit.toko');

    Route::get('/', [TokoController::class, 'viewToko'])->name('view.toko');
    Route::get('/form-toko/edit', [TokoController::class, 'viewEditToko'])->name('view.edit.toko');
    Route::match(['POST', 'PUT'], '/form-toko/submit', [TokoController::class, 'updateToko'])->name('update.toko');
    Route::delete('/toko/delete/{id}', [TokoController::class, 'destroy'])->name('destroy.toko');


});
