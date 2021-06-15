<?php

use App\Http\Controllers\MatrixController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MatrixController::class, 'index']);
Route::post('cal', [MatrixController::class, 'cal'])->name('cal');
Route::get('res', [MatrixController::class, 'res'])->name('res');