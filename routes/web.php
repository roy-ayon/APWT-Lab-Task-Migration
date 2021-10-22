<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class,'index']);
Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product/create',[ProductController::class,'store']);
Route::get('/product/details/{id}',[ProductController::class,'show']);
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/product/edit/{id}',[ProductController::class,'update']);
Route::get('/product/delete/{id}',[ProductController::class,'delete']);
Route::post('/product/delete/{id}',[ProductController::class,'destroy']);
