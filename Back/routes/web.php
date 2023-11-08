<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'localLogin']);

Route::get('/admin', [AuthController::class, 'admin'])->name('panel');
Route::get('/admin/products', [ProductController::class, 'localIndex'])->name('products');
Route::get('/photo/{product}', [ImageController::class, 'getPhoto']);

