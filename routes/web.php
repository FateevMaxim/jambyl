<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::resource('admin', AdminController::class);
});

require __DIR__ . '/auth.php';
