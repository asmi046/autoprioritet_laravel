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


Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::middleware('auth')->group(function () {
    Route::get('/kabinet', [CabinetController::class, 'index'])->name('kabinet');
});
