<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananKamiController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketJasaController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisiMisiController;
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
Route::get('/blogname/{id}',[BlogController::class, 'detail'])->name('landing.blogdetail');
Route::get('/reservasi',[ReservasiController::class, 'index'])->name('landing.ourblog');

// order form
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/confirm', [OrderController::class, 'confirm'])->name('order.confirm');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/confirmation/{id}', [OrderController::class, 'confirmation'])->name('order.confirmation');

// admin
Route::get('/dash-log',[AuthController::class,'login'])->name('login');
Route::post('/dash-log',[AuthController::class,'authenticate']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard-admin',[LandingController::class, 'admin'])->middleware('auth')->name('admin.index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    // welcome page home 
    Route::get('/homepage',[HomeController::class,'index'])->name('home.index');
    Route::get('/homepage/{id}/edit', [HomeController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage/{id}', [HomeController::class, 'update'])->name('homepage.update');
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
    // Aboutus Section
    Route::get('/aboutus',[AboutController::class,'admin'])->name('aboutus.index');
    Route::get('/aboutus/{id}/edit', [AboutController::class, 'edit'])->name('aboutus.edit');
    Route::put('/aboutus/{id}', [AboutController::class, 'update'])->name('aboutus.update');
    Route::delete('/aboutus/{id}', [AboutController::class, 'destroy'])->name('aboutus.destroy');
    Route::get('/aboutus/create', [AboutController::class, 'create'])->name('aboutus.create');
    Route::post('/aboutus', [AboutController::class, 'store'])->name('aboutus.store');
    // Visi Misi Section
    Route::get('/visimisi',[VisiMisiController::class,'index'])->name('visimisi.index');
    Route::get('/visimisi/{id}/edit', [VisiMisiController::class, 'edit'])->name('visimisi.edit');
    Route::put('/visimisi/{id}', [VisiMisiController::class, 'update'])->name('visimisi.update');
    Route::delete('/visimisi/{id}', [VisiMisiController::class, 'destroy'])->name('visimisi.destroy');
    Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
    Route::post('/visimisi', [VisiMisiController::class, 'store'])->name('visimisi.store');
    // Visi Misi Section
    Route::get('/blog',[BlogController::class,'admin'])->name('blog.index');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    // order form
    Route::get('/admin/orders', [OrderAdminController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/orders/{order}', [OrderAdminController::class, 'edit'])->name('admin.orders.edit');
    Route::put('/admin/orders/{order}', [OrderAdminController::class, 'update'])->name('admin.orders.update');
});