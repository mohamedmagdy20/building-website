<?php

use App\Http\Controllers\Advertisment\AdvertismentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
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
Route::get('filter/categroy',[HomeController::class,'filterCategory'])->name('get.category.type');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('ai',[HomeController::class,'ai'])->name('ai');
Route::get('tips',[HomeController::class,'tip'])->name('tips');


Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'loginView'])->name('login.view');
    Route::post('login',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'registerView'])->name('register.view');
    Route::post('register',[AuthController::class,'register'])->name('register');
    Route::get('verify',[AuthController::class,'verify'])->name('verify');
    Route::post('check-otp',[AuthController::class,'checkOtp'])->name('check-otp');
    Route::get('resend_otp',[ForgetPasswordController::class,'resend'])->name('resend_otp');
    
    Route::post('update-fcm',[AuthController::class,'updateFCM'])->name('update-fcm');

    

    
    // Forget Password
    Route::get('forget-password',[ForgetPasswordController::class,'index'])->name('forget-password.view');
    Route::get('forget-password/verify/{phone}',[ForgetPasswordController::class,'verifyView'])->name('verify.view');
    Route::get('change-password',[ForgetPasswordController::class,'changePasswordView'])->name('change-password.view');
    Route::get('resend-otp/{phone}',[ForgetPasswordController::class,'resend'])->name('resend-otp');
    Route::post('send-otp',[ForgetPasswordController::class,'sendOtp'])->name('send-otp');
    Route::post('forget-password/verify',[ForgetPasswordController::class,'verify'])->name('forget-password.verify');
    Route::post('change-password',[ForgetPasswordController::class,'changePassword'])->name('change-password');
    // 


    
});

Route::get('/advertisment/{id}', [HomeController::class , 'show'])->name('advertisment.show');

Route::get('change/{lang}',[LocalizationController::class,'setLang'])->name('change-lang');
Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    // Route::get('advertisment/create',[HomeController::class,'create'])->name('ads.create');
    Route::get('create',[HomeController::class,'create'])->name('ads.add');

    Route::get('get-category',[AdvertismentController::class,'getCategory'])->name('get-categories');
    Route::post('advertisment/store',[AdvertismentController::class,'store'])->name('ads.store');
    Route::get('favourite/create',[AdvertismentController::class,'addFav'])->name('ads.fav.create');

    Route::group(['prefix'=>'profile','controller'=>ProfileController::class],function(){
        Route::get('main','index')->name('profile.main');
        Route::get('listing','listing')->name('profile.listing');
        Route::get('favourite','favouriteListing')->name('profile.favourite');
        Route::get('chat','chat')->name('profile.chat');
        Route::get('payment','payment')->name('profile.payment');
        Route::get('edit','edit')->name('profile.edit');
        Route::get('delete-ads/{id}','deleteAds')->name('delete.advertisment');
        Route::get('delete-fav/{id}','deleteFav')->name('delete.advertisment.fav');
    });


    Route::group(['prefix'=>'profile','controller'=>ChatController::class],function(){
        Route::get('chat/{id}','chat')->name('chats');
        Route::post('send-message','sendMessage')->name('send-message');
        Route::get('create-chat','createChat')->name('create.chat');
    });

    

    Route::get('sold/{id}',[AdvertismentController::class,'markAsSold'])->name('sold');
    Route::get('unsold/{id}',[AdvertismentController::class,'markAsUnSold'])->name('unsold');
});
