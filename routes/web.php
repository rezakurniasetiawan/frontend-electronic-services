<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carouselController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\testimoniController;

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


Route::get('/', [landingpageController::class, 'landingpage'])->name('landingpage.index');
Route::get('/signin', [authController::class, 'login'])->name('login');
Route::post('/loginaction', [authController::class, 'actionlogin'])->name('auth.actionlogin');
Route::post('/logout', [authController::class, 'actionlogout'])->name('auth.actionlogout');


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboards', [dashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('dashboards')->group(function () {
        Route::get('/carousel', [carouselController::class, 'index'])->name('carousel.index');
        Route::post('/carousel/store', [carouselController::class, 'store'])->name('carousel.store');
        Route::put('/carousel/update/{id}', [carouselController::class, 'update'])->name('carousel.update');
        Route::delete('/carousel/destroy/{id}', [carouselController::class, 'destroy'])->name('carousel.destroy');

        Route::get('/about', [aboutController::class, 'index'])->name('about.index');
        Route::put('/about/update/{id}', [aboutController::class, 'update'])->name('about.update');

        Route::get('/services', [serviceController::class, 'index'])->name('services.index');
        Route::post('/services/store', [serviceController::class, 'store'])->name('services.store');
        Route::put('/services/update/{id}', [serviceController::class, 'update'])->name('services.update');
        Route::delete('/services/destroy/{id}', [serviceController::class, 'destroy'])->name('services.destroy');

        Route::get('/testimonials', [testimoniController::class, 'index'])->name('testimonials.index');
        Route::post('/testimonials/store', [testimoniController::class, 'store'])->name('testimonials.store');
        Route::delete('/testimonials/destroy/{id}', [testimoniController::class, 'destroy'])->name('testimonials.destroy');

        Route::get('/settings', [settingController::class, 'index'])->name('settings.index');
        Route::put('/settings/update/{id}', [settingController::class, 'update'])->name('settings.update');
    });
});
