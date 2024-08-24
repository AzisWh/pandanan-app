<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananKamiController;
use App\Http\Controllers\PaketJasaController;
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

    // welcome page home 
    Route::get('/homepage',[HomeController::class,'index'])->name('home.index');
    Route::get('/homepage/{id}/edit', [HomeController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage/{id}', [HomeController::class, 'update'])->name('paketjasa.update');
    Route::delete('/homepage/{id}', [HomeController::class, 'destroy'])->name('homepage.destroy');
    Route::get('/homepage/create', [HomeController::class, 'create'])->name('homepage.create');
    Route::post('/homepage', [HomeController::class, 'store'])->name('homepage.store');
    // paket jasa home 
    Route::get('/paketjasa',[PaketJasaController::class,'index'])->name('paketjasa.index');
    Route::get('/paketjasa/{id}/edit', [PaketJasaController::class, 'edit'])->name('paketjasa.edit');
    Route::put('/paketjasa/{id}', [PaketJasaController::class, 'update'])->name('paketjasa.update');
    Route::delete('/paketjasa/{id}', [PaketJasaController::class, 'destroy'])->name('paketjasa.destroy');
    Route::get('/paketjasa/create', [PaketJasaController::class, 'create'])->name('paketjasa.create');
    Route::post('/paketjasa', [PaketJasaController::class, 'store'])->name('paketjasa.store');
    // Layanan Kami Accordion
    Route::get('/layanan',[LayananKamiController::class,'index'])->name('layanan.index');
    Route::get('/layanan/{id}/edit', [LayananKamiController::class, 'edit'])->name('layanan.edit');
    Route::put('/layanan/{id}', [LayananKamiController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{id}', [LayananKamiController::class, 'destroy'])->name('layanan.destroy');
    Route::get('/layanan/create', [LayananKamiController::class, 'create'])->name('layanan.create');
    Route::post('/layanan', [LayananKamiController::class, 'store'])->name('layanan.store');
    // Faq Section
    Route::get('/faq',[FaqController::class,'index'])->name('faq.index');
    Route::get('/faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
});