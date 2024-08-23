<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LandingController::class, 'index'])->name('landing.index');
Route::get('/about-us',[AboutController::class, 'index'])->name('landing.about');
Route::get('/service',[ServiceController::class,'index'])->name('landing.service');
Route::get('/ourblog',[BlogController::class, 'index'])->name('landing.ourblog');
Route::get('/blogname',[BlogController::class, 'detail'])->name('landing.blogdetail');

// admin
Route::get('/dash-log',[AuthController::class,'login'])->name('login');
Route::post('/dash-log',[AuthController::class,'authenticate']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard-admin',[LandingController::class, 'admin'])->middleware('auth')->name('admin.index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/homepage',[HomeController::class,'index'])->name('home.index');
});