<?php

use App\Http\Controllers\Advertisment\AdvertismentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Models\Advertise;
use App\Models\Advertisment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'home'])->name('home.main');

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'loginView'])->name('login.view');
    Route::post('login',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'registerView'])->name('register.view');
    Route::post('register',[AuthController::class,'register'])->name('register');
    
});

Route::get('change/{lang}',[LocalizationController::class,'setLang'])->name('change-lang');

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('advertisment/create',[AdvertismentController::class,'create'])->name('ads.create');
    Route::get('get-category',[AdvertismentController::class,'getCategory'])->name('get-categories');
    Route::post('advertisment/store',[AdvertismentController::class,'store'])->name('ads.store');

});