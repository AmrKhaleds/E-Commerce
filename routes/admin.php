<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoriesController;
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
define('DEFAULT_PAGINATION', 10);

Route::group(['middleware' =>  'auth:admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    ######################## Languages Routes ###############################################
    Route::resource('/languages', LanguageController::class, [
        'as' => 'admin'
    ]);
    ######################## End Languages Routes ############################################

    ######################## End Languages Routes ############################################
    Route::resource('/mainCategories', MainCategoriesController::class, [
        'as' => 'admin'
    ]);
    ######################## End Languages Routes ############################################
});

######################## login & registration Routes #########################################
Route::group(['middleware' => 'guest:admin'], function(){
    Route::get('login', [LoginController::class, 'index'])->name('getAdmin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});
######################## End login & registration Routes ############################################
