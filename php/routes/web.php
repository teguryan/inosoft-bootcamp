<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\PercabanganController;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\LoopingController;
use App\Http\Controllers\FunctionController;

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

//php-dasar

//variable
Route::get('v1',[VariableController::class,'pertama']);

//percabangan
Route::get('p1',[PercabanganController::class,'pertama']);
Route::get('p2',[PercabanganController::class,'kedua']);
Route::get('p3',[PercabanganController::class,'ketiga']);
Route::get('p4',[PercabanganController::class,'keempat']);
Route::get('p5',[PercabanganController::class,'kelima']);

//array
Route::get('a1',[ArrayController::class,'pertama']);
Route::get('a2',[ArrayController::class,'kedua']);

//string
Route::get('s1',[StringController::class,'pertama']);

//looping
Route::get('l1',[LoopingController::class,'pertama']);
Route::get('l2',[LoopingController::class,'kedua']);
Route::get('l3',[LoopingController::class,'ketiga']);
Route::get('l4',[LoopingController::class,'keempat']);
Route::get('l5',[LoopingController::class,'kelima']);
Route::get('l6',[LoopingController::class,'keenam']);

//function
Route::get('f1',[FunctionController::class,'pertama']);
Route::get('f2',[FunctionController::class,'kedua']);
Route::get('f3',[FunctionController::class,'ketiga']);
Route::get('f4',[FunctionController::class,'keempat']);
Route::get('f5',[FunctionController::class,'kelima']);
Route::get('f6',[FunctionController::class,'keenam']);


