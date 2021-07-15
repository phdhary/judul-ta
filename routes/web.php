<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JudulTAController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('judulta', JudulTAController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('mahasiswa', MahasiswaController::class);



Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']],function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']],function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('admin.settings');
});

