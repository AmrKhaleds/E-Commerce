<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::group(['middleware' =>  'auth:admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::group(['middleware' => 'guest:admin'], function(){
    Route::get('login', [LoginController::class, 'index'])->name('getAdmin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});


