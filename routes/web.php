<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialController;
use App\Http\Controllers\registerController;

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

Route::get('/', [socialController::class, 'index'])->name('dashboard');
Route::get('/login', [socialController::class, 'login'])->name('login');
Route::get('/signup', [socialController::class, 'signup'])->name('signup');
Route::post('/login', [registerController::class, 'loginuser'])->name('loginuser');
Route::post('/signup', [registerController::class, 'registeruser'])->name('signupuser');
