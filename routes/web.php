<?php

use App\Http\Controllers\AuthController;
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
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/signup_submit',[AuthController::class,'signup_submit'])->name('signup_submit');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/login_submit',[AuthController::class,'loginSubmit'])->name('loginSubmit');


Route::get('/logout',[AuthController::class,'logout'])->name('logout');



Route::get('/otp_create',[AuthController::class,'otp'])->name('otp');

Route::controller(AuthController::class)->group(function(){
    Route::post('/otp_generate',[AuthController::class,'otp.generate'])->name('otp.generate');

});
