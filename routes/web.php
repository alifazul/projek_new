<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LihatMagangController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\PasswordController;


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



Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/carimagang', function () {
    return view('carimagang');
});

Route::get('/login', function () {
    return view('auth.login')->name('login');
});

Auth::routes();

Route::get('/carimagang', [LihatMagangController::class, 'lihat'])->name('magang.lihat');

Route::group(['middleware' => ['role:admin']],function () {
    Route::controller(AdminController::class)->prefix('adm')->group(function(){
        Route::get('', 'index')->name('admin.index');
    });
    Route::controller(MagangController::class)->prefix('admin/magang')->group(function(){
        Route::get('', 'index')->name('magang.index');
        Route::get('create', 'create')->name('magang.create');
        Route::post('store', 'store')->name('magang.store');
        Route::get('detail/{id}', 'show')->name('magang.show');
        Route::get('edit/{id}', 'edit')->name('magang.edit');
        Route::post('edit/{id}', 'update')->name('magang.update');
        Route::get('hapus/{id}', 'destroy')->name('magang.destroy');
    });
    Route::controller(ProfileController::class)->prefix('admin/user')->group(function(){
        Route::get('', 'index')->name('user.index');
        Route::get('create', 'create')->name('user.create');
        Route::post('store', 'store')->name('user.store');
        Route::get('hapus/{id}', 'destroy')->name('user.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [ProfileController::class, 'logprof'])->name('home');
    Route::get('/profil', [ProfileController::class, 'profil'])->name('profile');
    Route::get('/editprofil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/editprofil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/magang/tambah', [MagangController::class,'tambah'])->name('magang.tambah');
    Route::post('/magang/tambah', [MagangController::class,'simpan'])->name('magang.simpan');
     Route::get('/magang/edit/{id}', [MagangController::class,'ubah'])->name('magang.ubah');
    Route::post('/magang/edit/{id}', [MagangController::class,'change'])->name('magang.change');
    Route::get('/magang/hapus/{id}', [MagangController::class,'hapus'])->name('magang.hapus');
    Route::get('password', [PasswordController::class,'edit'])->name('user.password.edit');
    Route::patch('password', [PasswordController::class,'update'])->name('user.password.update');
    Route::get('profile', [ProfileController::class,'editu'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class,'updateu'])->name('profile.update');
});

