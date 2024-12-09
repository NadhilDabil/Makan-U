<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [AuthController::class, 'viewIndex'])->name('view.index');

Route::get('/detail', function () {
    return view('shop-detail');
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


Route::post('/loginsubmit', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['mahasiswa'])->group(function () {
    Route::get('/view-mahasiswa', [AuthController::class, 'viewMahasiswa'])->name('view.mahasiswa');

});

Route::middleware(['penjual'])->group(function () {
    Route::get('/view-penjual', [AuthController::class, 'viewPenjual'])->name('view.penjual');

    Route::get('/form-toko', [TokoController::class, 'viewForm'])->name('view.form.penjual');
    Route::post('/form-toko/submit', [TokoController::class, 'storeToko'])->name('submit.toko');

    Route::get('/view-toko', [TokoController::class, 'viewToko'])->name('view.toko');
    Route::get('/form-toko/edit', [TokoController::class, 'viewEditToko'])->name('view.edit.toko');
    Route::match(['POST', 'PUT'], '/form-toko/submit', [TokoController::class, 'updateToko'])->name('update.toko');
    Route::delete('/toko/delete/{id}', [TokoController::class, 'destroy'])->name('destroy.toko');


    Route::get('/view-promo', [PromoController::class, 'showPromo'])->name('view.promo');
    Route::get('/view-form-promo', [PromoController::class, 'viewPromo'])->name('view.form.promo');
    Route::post('/form-promo-submit', [PromoController::class, 'storePromo'])->name('submit.promo');
    Route::get('/form-edit-promo/{id}',[PromoController::class, 'editPromo'])->name('view.edit.promo');
    Route::match(['POST', 'PUT'], '/form-edit-submit/{id}', [PromoController::class, 'updatePromo'])->name('update.promo');
    Route::delete('/promo/delete/{id}', [PromoController::class, 'destroyPromo'])->name('destroy.promo');

});
