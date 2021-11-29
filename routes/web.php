<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoogleController;

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

Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/regist', [AuthController::class, 'regist'])->name('regist');
Route::post('/regist', [AuthController::class, 'registStore'])->name('regist.store');

Route::get('/man', [ProductController::class, 'man'])->name('man');
Route::get('/woman', [ProductController::class, 'woman'])->name('woman');
Route::get('/latest', [ProductController::class, 'latest'])->name('latest');
Route::get('/top', [ProductController::class, 'top'])->name('top');
Route::post('/rating', [ProductController::class, 'storeRating'])->name('rating.store');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');