<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::post('/login', [UserController::class, 'login']);
Route::post('/product', [ProductController::class, 'getProduct']);
Route::post('/addproduct', [ProductController::class, 'addProduct']);
Route::delete('/deleteproduct/{id}', [ProductController::class, 'deleteProduct']);
Route::patch('/updateproduct/{id}', [ProductController::class, 'updateProduct']);
Route::get('/getoneproduct/{id}',  [ProductController::class, 'getOneProduct']);
Route::post('/user', [UserController::class, 'register']);


