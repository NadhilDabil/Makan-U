<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/loginn', function () {
    return view('login');
})->middleware('admin')->name('loginn');



Route::get('/register-view-mahasiswa', [AuthController::class, 'indexMahasiswa'])->name('view.register.mahasiswa');
Route::post('/register-mahasiswa', [AuthController::class, 'storeMahasiswa'])->name('register.submit.mahasiswa');

Route::get('/register-view-penjual', [AuthController::class, 'indexPenjual'])->name('view.register.penjual');
Route::post('register-penjual', [AuthController::class, 'storePenjual'])->name('register.submit.penjual');

Route::get('/index', [AuthController::class, 'viewIndex'])->name('view.index');

Route::post('/loginsubmit', [AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
