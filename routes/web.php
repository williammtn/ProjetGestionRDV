<?php


use App\Http\Controllers\ForfaitController;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use App\Http\Livewire\Calendar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ForfaitController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource("forfaits", ForfaitController::class);
Route::resource("prestations", PrestationController::class);
Route::resource("sections", SectionController::class);
Route::resource("users", UserController::class);


Route::get('/accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');
Route::get('/rdv', [App\Http\Controllers\RdvController::class, 'index'])->name('rdv');

Route::get('/full-calender', [FullCalenderController::class, 'index'])->name('prendrerdv');

Route::post('full-calender/action', [FullCalenderController::class, 'action']);


