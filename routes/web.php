<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SuccessController;

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

Route::view('/', 'index');
//Auth route
Auth::routes();

Route::get('index', [IndexController::class, 'ShowIndexpage']);
Route::get('cart', [CartController::class, 'showcartpage']);
Route::get('products', [ProductController::class, 'showproductspage']);
Route::get('Settings', [SettingController::class, 'showsettingspage']);
Route::get('success', [SuccessController::class, 'showsuccesspage']);
