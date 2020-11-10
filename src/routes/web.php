<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
})->middleware('guest')
  ->name('index');

Route::resource('register', RegisterController::class)
  ->only(['index','store'])
  ->middleware('guest');

Route::resource('login', SessionController::class)
  ->only(['index', 'store'])
  ->middleware('guest')
  ->name('index', 'login');

Route::delete('logout', [SessionController::class, 'destroy'])
  ->middleware('auth')
  ->name('logout');

Route::resource('home', HomeController::class)
  ->only(['index'])
  ->middleware('auth')
  ->name('index', 'home');

Route::resource('products', ProductController::class)
  ->middleware('auth');
