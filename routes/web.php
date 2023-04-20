<?php

use App\Http\Controllers\NAACController;
use App\Http\Controllers\CollegeRegistrationController;
use App\Http\Controllers\PromotionAuthController;
use App\Http\Controllers\PromotionFormController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
  return redirect()->route('college-register.index');
});
Route::resource('naac-filling', NAACController::class)->name('','naac-filling');

Route::resource('college-register',CollegeRegistrationController::class)->name('','college-register');
Route::get('registration',[RegistrationController::class,'index'])->name('registration');


//Promotion form 

Route::get('promotion-form/login',[PromotionAuthController::class,'user_login'])->name('promotion-form.user-login');
Route::post('promotion-form/login-otp-send',[PromotionAuthController::class,'user_login_otp_send'])->name('promotion-form.user-login-otp-send');
Route::post('promotion-form/login-otp-verify',[PromotionAuthController::class,'user_login_otp_verify'])->name('promotion-form.user-login-otp-verify');
Route::prefix('promotion-form')->as('promotion-form.')->group(function () {
    Route::get('step-1',[PromotionFormController::class,'step1'])->name('step-1');
});
