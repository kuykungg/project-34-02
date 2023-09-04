<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){

    Route::get('/', function () {
        return view('back/dashboard');
    })->name('index');

    Route::get('/datamgr', function () {
        return view('back/datamanagement');
    })->name('datamgr');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนูสินค้า
Route::get('admin/product/index',[ProductController::class, 'index']);
Route::get('admin/product/create',[ProductController::class, 'create']);


//เมนูประเภทสินค้า
Route::get('admin/brand/index',[BrandController::class, 'index']);
Route::get('admin/brand/create',[BrandController::class, 'create']);
Route::post('admin/brand/insert',[BrandController::class, 'insert']);
Route::get('admin/brand/edit/{id}',[BrandController::class, 'edit']);
Route::post('admin/brand/update/{id}',[BrandController::class, 'update']);
Route::get('admin/brand/delete/{id}',[BrandController::class, 'delete']);
