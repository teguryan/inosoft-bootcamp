<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// pengenalan laravel
Route::get('/item/form',[ItemController::class,'itemForm']);
Route::post('/item/post',[ItemController::class,'itemPost']);

Route::get('/','App\Http\Controllers\ItemController@index');
Route::get('/x',[ItemController::class,'indexxx']);
Route::get('/xx',[ItemController::class,'indexx']);

Route::get('/1',[ItemController::class,'index1']);

Route::get('/item/{nama_barang}',[ItemController::class,'item']);
//

// laravel lanjutan
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/form',[ProductController::class,'create']);
Route::post('/product/store',[ProductController::class,'store']);