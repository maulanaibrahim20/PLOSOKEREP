<?php

use App\Http\Controllers\AparaturController;
use App\Http\Controllers\HomeController;
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




Route::get('/',[HomeController::class, 'dashboard']);


Route::get('/user',[HomeController::class, 'index'])->name('index');

Route::get('/aparatur',[AparaturController::class, 'aparatur'])->name('aparatur');

Route::get('/create',[AparaturController::class, 'create'])->name('create');

Route::post('/store2',[AparaturController::class, 'store2'])->name('store2');

Route::get('/edit/{id}',[AparaturController::class, 'edit'])->name('aparatur.edit');
Route::put('/update/{id}',[AparaturController::class, 'update'])->name('aparatur.update');
