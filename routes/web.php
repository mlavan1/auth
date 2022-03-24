<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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



Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');

Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');



Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']],function(){

    Route::get('/auth/login','App\Http\Controllers\MainController@login')->name('auth.login');
    
    // Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');

    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');

    Route::get('/admin/dashboard',[MainController::class,'dashboard'])->name('auth.dashboard');
    
    Route::get('/admin/home',[MainController::class,'dashboard'])->name('auth.dashboard');
    
    Route::get('/admin/about',[MainController::class,'about'])->name('auth.about');

    Route::get('/admin/contact',[MainController::class,'contact'])->name('auth.contact');
});
