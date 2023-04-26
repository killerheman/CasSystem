<?php

use App\Http\Controllers\NAACController;
use App\Http\Controllers\CollegeRegistrationController;
use App\Http\Controllers\PreviewPromotionController;
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
Route::get('registration-step2',[RegistrationController::class,'step2'])->name('step2');
Route::get('registration-step3',[RegistrationController::class,'step3'])->name('step3');
Route::get('registration-step4',[RegistrationController::class,'step4'])->name('step4');
Route::view('/step7', 'step7');
Route::view('/step8', 'step8');
Route::view('/step9', 'step9');
Route::view('/preview','preview');
//Promotion form
Route::get('promotion-form/login',[PromotionAuthController::class,'user_login'])->name('promotion-form.user-login');
Route::post('promotion-form/login-otp-send',[PromotionAuthController::class,'user_login_otp_send'])->name('promotion-form.user-login-otp-send');
Route::post('promotion-form/login-otp-verify',[PromotionAuthController::class,'user_login_otp_verify'])->name('promotion-form.user-login-otp-verify');
Route::prefix('promotion-form')->as('promotion-form.')->group(function () {
    // Part A Routes
    Route::get('step-1',[PromotionFormController::class,'step1'])->name('step-1');
    Route::post('step-1-store',[PromotionFormController::class,'step1_store'])->name('step-1-store');
    Route::get('step-2',[PromotionFormController::class,'step2'])->name('step-2');
    Route::post('step-2-store',[PromotionFormController::class,'step2_store'])->name('step-2-store');
    Route::get('step-3',[PromotionFormController::class,'step3'])->name('step-3');
    Route::post('step-3-store',[PromotionFormController::class,'step3_store'])->name('step-3-store');
    Route::get('step-4',[PromotionFormController::class,'step4'])->name('step-4');
    Route::post('step-4-store',[PromotionFormController::class,'step4_store'])->name('step-4-store');
    Route::get('step-5',[PromotionFormController::class,'step5'])->name('step-5');
    Route::post('step-5-store',[PromotionFormController::class,'step5_store'])->name('step-5-store');

    //Part B Routes
    Route::get('step-6',[PromotionFormController::class,'step6'])->name('step-6');
    Route::post('step-6-store',[PromotionFormController::class,'step6_store'])->name('step-6-store');
    Route::get('step-7',[PromotionFormController::class,'step7'])->name('step-7');
    Route::post('step-7-store',[PromotionFormController::class,'step7_store'])->name('step-7-store');
    Route::get('step-8',[PromotionFormController::class,'step8'])->name('step-8');
    Route::post('step-8-store',[PromotionFormController::class,'step8_store'])->name('step-8-store');
    Route::get('step-9',[PromotionFormController::class,'step9'])->name('step-9');
    Route::post('step-9-store',[PromotionFormController::class,'step9_store'])->name('step-9-store');
    Route::get('step-10',[PromotionFormController::class,'step10'])->name('step-10');
    Route::post('step-10-store',[PromotionFormController::class,'step10_store'])->name('step-10-store');


    //Preview Promotion Form
    Route::get('preview', [PreviewPromotionController::class, 'preview'])->name('preview');

});
