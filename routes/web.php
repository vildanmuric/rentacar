<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/pocetna', [HomeController::class, 'getHomePage']) -> name('homePage');

Route::get('/pretraga', [CarController::class, 'getSearchPage']) -> name('searchPage');
Route::get('/{id}/opis', [CarController::class, 'getDescription']) -> name('description');
Route::get('/{id}/delete', [CarController::class, 'delete']) -> name('delete');



