<?php

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


Route::get('/',[App\Http\Controllers\frontend\FrontendController::class, 'index'])->name('home');
   
//login route
Route::get('login',[App\Http\Controllers\frontend\FrontendController::class,'login'])->name('frontend_login');
Route::post('/login_action',[App\Http\Controllers\frontend\FrontendController::class,'login_action'])->name('user.login.action');
Route::get('/user/logout',[App\Http\Controllers\frontend\FrontendController::class, 'user_logout'])->name('user.logout');
// Route::group(['middleware'=>'users'], function(){
    
// });

