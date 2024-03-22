<?php

use App\Http\Controllers\PowerPlantController;
use App\Models\PowerPlant;
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
Route::resource('powerPlants', PowerPlantController::class);
Route::get('/',[PowerPlantController::class , 'index']);
Route::get('fetch', [PowerPlantController::class, 'fetch'])->name('fetch');
Route::post('powerplants/selective', [PowerPlantController::class, 'selective'])->name('powerPlants.selective.index');