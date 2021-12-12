<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PreController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello/{msg?}',function ($msg='no message') {
// Route::get('hello/{id?}/{pass?}', [HelloController::class,'index']);
// Route::get('hello', [HelloController::class,'index']);
// Route::get('hello/other', [HelloController::class,'other']);
// Route::get('hello',[HelloController::class,'index']);

Route::get('hello',[HelloController::class,'index']);
// Route::get('/',[PreController::class,'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
