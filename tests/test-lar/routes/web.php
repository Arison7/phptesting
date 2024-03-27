<?php

use App\Http\Controllers\PowerPlantController;
use App\Models\PowerPlant;
use App\Http\Controllers\MonitorController;
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
Route::get('powerplants/selective', [PowerPlantController::class, 'selective'])->name('powerPlants.selective.index');
Route::post('monitors/store', [MonitorController::class, 'store'])->name('monitors.store');
Route::delete('monitors/destroy/{monitor}', [MonitorController::class, 'destroy'])->name('monitors.destroy');