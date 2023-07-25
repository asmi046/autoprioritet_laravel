<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\SearchController;

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






Route::get('/', [IndexController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/kabinet', [CabinetController::class, 'index'])->name('kabinet');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {



    Route::get('/search', [SearchController::class, 'index'])->name('search');

    Route::get('/register', [AuthController::class, 'show_register_page'])->name('register');
    Route::post('/register_do', [AuthController::class, "register"])->name("register_do");

    Route::get('/login', [AuthController::class, 'show_login_page'])->name('login');
    Route::post('/login_do', [AuthController::class, "login"])->name("login_do");
});
