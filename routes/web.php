<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\CustomerDashboardController;

use Illuminate\Support\Facades\Route;


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

/**
 *Admin Authenticaiton
 */

Route::get('admin/register',[AdminRegisterController::class,'index'])->name('adminRegister');
Route::post('admin/register',[AdminRegisterController::class,'store'])->name('admin-register-store');

Route::get('admin/login',[AdminLoginController::class,'index'])->name('adminLogin');
Route::post('admin/login',[AdminLoginController::class,'store'])->name('admin-login-store');

Route::get('admin/dashboard',[AdminDashboardController::class,'index'])->name('adminDashboard');


 //-------------------------------------
 
/**
 *Customer Authenticaiton
 */
Route::get('customer/register',[CustomerRegisterController::class,'index'])->name('customerRegister');
Route::post('customer/register',[CustomerRegisterController::class,'store'])->name('customer-register-store');


Route::get('customer/login',[CustomerLoginController::class,'index'])->name('customerLogin');
Route::post('customer/login',[CustomerLoginController::class,'store'])->name('customer-login-store');

Route::get('customer/dashboard',[CustomerDashboardController::class,'index'])->name('customerDashboard');

 //-------------------------------------