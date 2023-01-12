<?php

use Illuminate\Support\Facades\Route;

//User panel Start
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
//User panel End
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

//User panel Start
Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::get('/register', [RegisterController::class, 'index'])->name('user.register');

//User panel End