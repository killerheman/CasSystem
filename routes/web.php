<?php

use App\Http\Controllers\NAACController;
use App\Http\Controllers\CollegeRegistrationController;
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
