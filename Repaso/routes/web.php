<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
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




Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodo1');
Route::get('/Screen1', [diarioController::class, 'metodoScreen1'])->name('apodoScreen1');
Route::get('/Screen2', [diarioController::class, 'metodoScreen2'])->name('apodoScreen2');
Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardar'])->name('guardar');


