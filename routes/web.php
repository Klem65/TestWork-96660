<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;

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

Route::get('/', [PhonesController::class, 'index'])->name('home');

Route::post('create', [PhonesController::class, 'create']);

Route::post('update', [PhonesController::class, 'update']);

Route::get('delete/{id}', [PhonesController::class, 'delete']);
