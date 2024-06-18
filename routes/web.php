<?php

use App\Http\Controllers\AparaturController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Aparatur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register-proses',[LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/',[HomeController::class, 'homepage']);
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/',[HomeController::class, 'dashboard']);
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/',[HomeController::class, 'homepage']);
    Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');



    Route::get('/user',[HomeController::class, 'index'])->name('index');

    Route::get('/aparatur',[AparaturController::class, 'aparatur'])->name('aparatur');
    Route::get('/create',[AparaturController::class, 'create'])->name('create');
    Route::post('/store2',[AparaturController::class, 'store2'])->name('store2');

    Route::get('/edit/{id}',[AparaturController::class, 'edit'])->name('aparatur.edit');
    Route::put('/update/{id}',[AparaturController::class, 'update'])->name('aparatur.update');
    Route::delete('/delete/{id}',[AparaturController::class, 'delete'])->name('aparatur.delete');


});




Route::get('/homepage', function () { 
    return view('homepage');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/Berita', function () {
    return view('Berita');
});
Route::get('/Beritaklik', function () {
    return view('Beritaklik');
});
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/Daftar', function () {
//     return view('Daftar');
// });
Route::get('/H_aparatur', function () {
    return view('H_aparatur');
});