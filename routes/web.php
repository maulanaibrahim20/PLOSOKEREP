<?php

use App\Http\Controllers\AdminUmkmController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\UserController;
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

// Rute untuk halaman login dan register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk logout mengarahkan ke homepage
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('guest');

// Rute untuk halaman beranda dapat diakses oleh siapa saja
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');

// Rute untuk register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

// Group untuk admin dengan middleware auth dan role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin'], 'as' => 'admin.'], function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [HomeController::class, 'user'])->name('user');
    Route::get('/aparatur', [AparaturController::class, 'aparatur'])->name('aparatur');
    Route::get('/create', [AparaturController::class, 'create'])->name('create');
    Route::post('/store2', [AparaturController::class, 'store2'])->name('store2');
    Route::get('/edit/{id}', [AparaturController::class, 'edit'])->name('aparatur.edit');
    Route::put('/update/{id}', [AparaturController::class, 'update'])->name('aparatur.update');
    Route::delete('/delete/{id}', [AparaturController::class, 'delete'])->name('aparatur.delete');
    Route::get('/pengaduan', [PengaduanController::class, 'pengaduan'])->name('pengaduan');
    Route::post('/simpan_pengaduan', [PengaduanController::class, 'simpan_pengaduan'])->name('simpan_pengaduan');
    Route::get('/edit_pengaduan/{id}', [PengaduanController::class, 'edit_pengaduan'])->name('Pengaduan.edit');
    Route::put('/update_pengaduan/{id}', [PengaduanController::class, 'update_pengaduan'])->name('Pengaduan.update');
    Route::delete('/delete_pengaduan/{id}', [PengaduanController::class, 'delete_pengaduan'])->name('Pengaduan.delete');
    Route::get('/profildesa', [ProfilDesaController::class, 'profildesa'])->name('profildesa');
    Route::get('/create_profildesa', [ProfilDesaController::class, 'create_profildesa'])->name('create_profildesa');
    Route::post('/simpan_profildesa', [ProfilDesaController::class, 'simpan_profildesa'])->name('simpan_profildesa');
    Route::get('/edit_profildesa/{id}', [ProfilDesaController::class, 'edit_profildesa'])->name('profildesa.edit');
    Route::put('/update_profildesa/{id}', [ProfilDesaController::class, 'update_profildesa'])->name('profildesa.update');
    Route::delete('/delete_profildesa/{id}', [ProfilDesaController::class, 'delete_profildesa'])->name('profildesa.delete');
    Route::get('/m_berita', [BeritaController::class, 'm_berita'])->name('m_berita');
    Route::get('/create_m_berita', [BeritaController::class, 'create_m_berita'])->name('create_m_berita');
    Route::post('/simpan_m_berita', [BeritaController::class, 'simpan_m_berita'])->name('simpan_m_berita');
    Route::get('/edit_m_berita/{id}', [BeritaController::class, 'edit_m_berita'])->name('m_berita.edit');
    Route::get('/show/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::put('/update_m_berita/{id}', [BeritaController::class, 'update_m_berita'])->name('m_berita.update');
    Route::delete('/delete_m_berita/{id}', [BeritaController::class, 'delete_m_berita'])->name('m_berita.delete');
});

// Rute untuk pengaduan masyarakat
Route::get('/pengaduan', [PengaduanController::class, 'pengaduan'])->name('pengaduan');
Route::get('/H_pengaduan', [PengaduanController::class, 'H_pengaduan'])->name('H_pengaduan');
Route::post('/simpan_pengaduan', [PengaduanController::class, 'simpan_pengaduan'])->name('simpan_pengaduan');
Route::delete('/delete_pengaduan/{id}', [PengaduanController::class, 'delete_pengaduan'])->name('delete_pengaduan');

// Rute untuk berita
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/beritaklik', [BeritaController::class, 'beritaklik'])->name('beritaklik');
Route::get('/beritaklik/{id}', [BeritaController::class, 'beritaklik'])->name('beritaklik');

// Rute untuk UMKM
Route::get('/umkm_d', [ProductController::class, 'umkm_d'])->name('umkm_d');
Route::get('/umkm_e', [ProductController::class, 'umkm_e'])->name('umkm_e');
Route::get('/umkm_e/{id}', [ProductController::class, 'umkm_e'])->name('umkm_e');
Route::get('/umkm_c/{id}', [ProductController::class, 'umkm_c'])->name('umkm_c');

// Rute halaman statis
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/H_aparatur', function () {
    return view('H_aparatur');
});
Route::get('/H_surat', function () {
    return view('H_surat');
});
Route::get('/UMKM-k', function () {
    return view('UMKM-k');
});

Route::get('/map-nav', function () {
    return view('map-nav');
});

Route::get('/kelamin', function () {
    return view('kelamin');
});

Route::get('/pekerjaan', function () {
    return view('pekerjaan');
});

Route::get('/agama', function () {
    return view('agama');
});

Route::get('/galeri', function () {
    return view('galeri');
});



// Group untuk UMKM dengan middleware auth dan role umkm
Route::group(['prefix' => 'umkm', 'middleware' => ['auth', 'role:umkm'], 'as' => 'umkm.'], function(){
    Route::get('/dashboard_umkm', [AdminUmkmController::class, 'dashboard_umkm'])->name('dashboard_umkm');
    Route::get('/product', [AdminUmkmController::class, 'product'])->name('product');
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/create_produk', [ProductController::class, 'create_produk'])->name('create_produk');
    Route::post('/simpan_produk', [ProductController::class, 'simpan_produk'])->name('simpan_produk');
    Route::get('/edit_produk/{id}', [ProductController::class, 'edit_produk'])->name('produk.edit');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('berita.show');
    Route::put('/update_produk/{id}', [ProductController::class, 'update_produk'])->name('produk.update');
    Route::delete('/delete_produk/{id}', [ProductController::class, 'delete_produk'])->name('produk.delete');
});

// Group untuk file manager dengan middleware auth
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// Group untuk rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Route::get('/cart', [CartController::class, 'index'])->name('Cart');
    // Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    // Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    // Route::post('/cart/remove/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
    // Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    // Routes for Admin UMKM to manage orders
    //  

    Route::get('/checkout', [OrderController::class, 'index']);
    Route::post('/checkout/{id}', [OrderController::class, 'checkout'])->name('checkout');
    // Route::post('/cart/add/{id}', [OrderController::class, 'addToCart'])->name('cart.add');

    Route::get('/cart', [OrderController::class, 'viewCart'])->name('cart.view'); // Route baru untuk menampilkan keranjang

    Route::get('/checkout', [OrderController::class, 'checkoutForm'])->name('checkout.form');

    Route::delete('/order/{id}', [OrderController::class, 'delete'])->name('order.delete'); // Route baru untuk menghapus order
});
