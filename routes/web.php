<?php

use Livewire\Livewire;
use App\Http\Livewire\Calendar;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\FullCalenderController;
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
    return redirect('accueil');
//    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource("prestations", PrestationController::class);


Route::get('/accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');
Route::get('/rdv', [App\Http\Controllers\RdvController::class, 'index'])->name('rdv');
Route::get('/forfaits',[\App\Http\Controllers\ForfaitController::class,'index'])->name('forfaits');

Route::get('/fullcalender', [FullCalenderController::class, 'index'])->name('prendrerdv');

Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);




Route::resource("users", UserController::class);
