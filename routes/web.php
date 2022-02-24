<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\NewslatterController;
use App\Http\Controllers\CastingController;
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
Route::localized(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/article/{id}', [MainController::class, 'getArticle']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('admin', [AdminController::class, 'index']);

    Route::resource('actors', ActorController::class);
    Route::resource('news', NewslatterController::class);
    Route::resource('casting', CastingController::class);

});



require __DIR__ . '/auth.php';
