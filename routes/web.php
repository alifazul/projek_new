<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagangController;
use App\Models\Magang;

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
    return view('welcome');
});

Route::get('/carimagang', function () {
    return view('carimagang');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();



Route::group(['middleware' => ['role:admin']],function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::controller(MagangController::class)->prefix('admin/magang')->group(function(){
        Route::get('', 'index')->name('magang.index');
        Route::get('detail/{id}', 'show')->name('magang.show');
        Route::get('edit/{id}', 'edit')->name('magang.edit');
        Route::post('edit/{id}', 'update')->name('magang.update');
        Route::get('hapus/{id}', 'destroy')->name('magang.destroy');
    });
    Route::controller(ProfileController::class)->prefix('admin/user')->group(function(){
        Route::get('', 'index')->name('user.index');
        Route::get('detail/{id}', 'show')->name('user.show');
        Route::get('edit/{id}', 'edit')->name('user.edit');
        Route::post('edit/{id}', 'update')->name('user.update');
        Route::get('hapus/{id}', 'destroy')->name('user.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/editprofil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/magang/tambah', [MagangController::class,'create'])->name('magang.create');
    Route::post('/magang/tambah', [MagangController::class,'store'])->name('magang.store');
});
