<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('produk')->group(function () {
    Route::get('/', [App\Http\Controllers\Produk\KategoriController::class, 'index'])->name('kategori-index');
    Route::post('/tambah', [App\Http\Controllers\Produk\KategoriController::class, 'tambah'])->name('kategori-tambah');
    Route::put('/kategori-update/{id}', [App\Http\Controllers\Produk\KategoriController::class, 'update'])->name('kategori-update');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('form-index');
    Route::get('/form/cari', [App\Http\Controllers\FormController::class, 'search'])->name('form-search');
    Route::post('/form-tambah', [App\Http\Controllers\FormController::class, 'tambah'])->name('form-tambah');
    Route::get('/form-edit/{id}', [App\Http\Controllers\FormController::class, 'edit'])->name('form-edit');
    Route::patch('/form-update/{id}', [App\Http\Controllers\FormController::class, 'update'])->name('form-update');
    Route::delete('/form-delete/{id}', [App\Http\Controllers\FormController::class, 'delete'])->name('form-delete');
    Route::patch('/form-restore/{id}', [App\Http\Controllers\FormController::class, 'restore'])->name('form-restore');
});

