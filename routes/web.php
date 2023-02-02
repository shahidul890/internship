<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OTPSend;
use App\Http\Controllers\UserController;
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
//Login Route
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/sign', [UserController::class, 'signIn'])->name('sign');
//Registration Route
Route::get('/registration', [UserController::class, 'registration']);
Route::post('/register', [UserController::class, 'register'])->name('register');
//Logout Route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
//Otp Send
Route::post('/otpsend', [OTPSend::class, 'index'])->name('otpaccept');
Route::get('/home', [IndexController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});
