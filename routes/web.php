<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/allcar', [CarController::class, 'index']);

// Route::get('/car/{id}',[CarController::class, 'show'])->name('car.detail');

Route::resource('cars', CarController::class);