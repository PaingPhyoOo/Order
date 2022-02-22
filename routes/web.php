<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomauthController;
use App\Http\Middleware\Manager;
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
Route::get('show/categories', function () {
    return view('creating/categories');
});
Route::get('show/detail', function () {
    return view('creating/detail');
});

Route::get('user/login',[\App\Http\Controllers\CustomauthController::class,'index'])->name('login');

Route::post('user/login',[\App\Http\Controllers\CustomauthController::class,'customLogin'])->name('login.custom');
Route::get('user/register',[CustomauthController::class, 'registration'])->name('register-user');
Route::post('user/register',[CustomauthController::class, 'customRegistration'])->name('register.custom');

Route::get('user/logout',[CustomauthController::class, 'signOut'])->name('signout');

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'Manager'),function (){
    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('index');

    Route::get('users',[\App\Http\Controllers\Admin\User::class,'index'])->name('index');
    Route::get('user/{id}/edit',[\App\Http\Controllers\Admin\User::class,'edit'])->name('edit');
    Route::post('user/{id}/edit',[\App\Http\Controllers\Admin\User::class,'update'])->name('update');

    Route::get('roles',[\App\Http\Controllers\RoleController::class,'index'])->name('index');
    Route::get('role/create',[\App\Http\Controllers\RoleController::class,'create'])->name('create');
    Route::post('role/create',[\App\Http\Controllers\RoleController::class,'store'])->name('store');
});
