<?php

use App\Http\Controllers\Advertisment\AdvertismentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Valuation\ValuationController;
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
Route::get('/evaluation', [ValuationController::class,'index'])->name('evaluation');
Route::post('/evaluation', [ValuationController::class,'checkPrice'])->name('check-price');


Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'loginView'])->name('login.view');
    Route::post('login',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'registerView'])->name('register.view');
    Route::post('register',[AuthController::class,'register'])->name('register');
    Route::get('verify',[AuthController::class,'verify'])->name('verify');
    Route::post('check-otp',[AuthController::class,'checkOtp'])->name('check-otp');
    Route::post('update-fcm',[AuthController::class,'updateFCM'])->name('update-fcm');
    
});

Route::get('/advertisment/{id}', [HomeController::class , 'show'])->name('categories.show');

Route::get('change/{lang}',[LocalizationController::class,'setLang'])->name('change-lang');
Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    // Route::get('advertisment/create',[HomeController::class,'create'])->name('ads.create');
    Route::get('create',[HomeController::class,'create'])->name('ads.add');

    Route::get('get-category',[AdvertismentController::class,'getCategory'])->name('get-categories');
    Route::post('advertisment/store',[AdvertismentController::class,'store'])->name('ads.store');

});
