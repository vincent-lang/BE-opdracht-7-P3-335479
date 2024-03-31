<?php

use App\Http\Controllers\GegevensController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/leveranciers', [GegevensController::class, 'index'])->name('leveranciers.index');

Route::get('/leveranciers/{leverancier}/{contact}', [GegevensController::class, 'wijzig'])->name('leveranciers.wijzig');

Route::get('/leveranciers/edit/{leverancier}/{contact}', [GegevensController::class, 'edit'])->name('leveranciers.edit');

Route::put('/leveranciers/store/{leverancier}/{contact}', [GegevensController::class, 'store'])->name('leveranciers.store');
