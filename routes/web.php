<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchTovarController;

use App\Http\Controllers\SenderConsultController;

use App\Http\Controllers\Page\PageController;

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
Route::get('/search-tovar/{brand}/{article}', [SearchTovarController::class, 'index'])->name('search-tovar');

Route::post('/send_consult', [SenderConsultController::class, "send_consultation"])->name('send_consultation');

Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

Route::middleware('auth')->group(function () {
    Route::get('/cabinet', [CabinetController::class, 'index'])->name('cabinet');
});
