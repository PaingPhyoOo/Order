<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomauthController;
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
Route::get('user/login',[\App\Http\Controllers\CustomauthController::class,'index'])->name('login');

Route::post('user/login',[\App\Http\Controllers\CustomauthController::class,'customLogin'])->name('login.custom');
Route::get('user/register',[CustomauthController::class, 'registration'])->name('register-user');
Route::post('user/register',[CustomauthController::class, 'customRegistration'])->name('register.custom');

Route::get('user/logout',[CustomauthController::class, 'signOut'])->name('signout');
