<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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

Route::get('/',[PageController::class, 'home'])->name('home');

Route::get('indice',[PageController::class, 'indice'])->name('indice');

Route::get('dettaglio',[PageController::class, 'dettaglio'])->name('dettaglio');