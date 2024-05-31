<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/', [HomeController::class, 'index'])->name('home');




Route::get('/project', function () {
    return view('layouts.public.project');
});

Route::get('/dashboard', function () {
    return view('layouts.private.dashboard');
});
Route::get('/profile', function () {
    return view('layouts.private.user.index');
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProfileUserController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.index');
        Route::get('/profile/edit', 'edit')->name('profile.edit');
        Route::put('/profile/update', 'update')->name('profile.update');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::put('/user/update', 'update')->name('user.update');
        Route::get('/user/destroy/{id}', 'destroy')->name('user.destroy');
        Route::post('/user/store', 'store')->name('user.store');
    });

    Route::controller(ResumeController::class)->group(function () {
        Route::get('/resume-dash', 'indexDash')->name('resume.index');
        Route::get('/resume-dash/edit/{id}', 'edit')->name('resume.edit');
        Route::put('/resume-dash/update', 'update')->name('resume.update');
        Route::get('/resume-dash/destroy/{id}', 'destroy')->name('resume.destroy');
        Route::post('/resume-dash/store', 'store')->name('resume.store');
    });
});
