<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\FournisseurController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ArticleController::class, 'show'])->name('articles');
Route::get('/', [FournisseurController::class, 'show'])->name('fournisseurs');
Route::get('/', [OperateurController::class, 'show'])->name('operateurs');
Route::get('/', [PaysController::class, 'show'])->name('pays');
