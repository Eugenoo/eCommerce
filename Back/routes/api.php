<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
/** Auth */

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout']);

/** Admin */

Route::group(['middleware' => ['auth:sanctum']], function() {

    //Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/product/add', [ProductController::class, 'store']);

    Route::delete('/product/{product}', [ProductController::class, 'destroy']);

    Route::put('/product/update', [ProductController::class, 'update']);
});

/** User */

Route::get('home', [ProductController::class, 'index']);

Route::get('product/{product}', [ProductController::class, 'show']);

//Categories

Route::get('categories', [CategoryController::class, 'index']);








