<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController As Home;

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

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function(){

    Route::get('/', [Home::class, 'index']);

    Route::get('/product', [Home::class, 'product']);
    Route::post('/product', [Home::class, 'addProduct']);
    Route::get('/product/edit/{id}', [Home::class, 'editProduct']);
    Route::post('/product/update', [Home::class, 'updateProduct']);



});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

