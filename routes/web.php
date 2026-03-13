<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, 'index']);
Route::get('/home', [CarController::class, 'index']);
Route::get('/my-cars', [CarController::class, 'myCars'])->name('cars.my-cars');
Route::get('/car/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/car/store', [CarController::class, 'store'])->name('cars.store');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

