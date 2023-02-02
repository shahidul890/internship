<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

route::get('login',[AuthController::class,'index'])->name('login');
route::post('login',[AuthController::class,'login'])->name('login');
route::get('register',[AuthController::class,'register_view'])->name('register');
route::post('register',[AuthController::class,'register'])->name('register');
route::get('home',[AuthController::class,'home'])->name('home');
route::get('logout',[AuthController::class,'logout'])->name('logout');
