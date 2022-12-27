<?php


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

// Public
Auth::routes();
Route::get('/accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');

// Membre
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Calendrier
Route::get('/full-calender', [FullCalenderController::class, 'index'])->name('prendrerdv');
Route::post('full-calender/action', [FullCalenderController::class, 'action']);

// Panneau administratif
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/rdv', [App\Http\Controllers\RdvController::class, 'index'])->name('rdv');
Route::resource("/admin/forfaits", ForfaitController::class);
Route::resource("/admin/prestations", PrestationController::class);
Route::resource("/admin/sections", SectionController::class);
Route::resource("/admin/users", UserController::class);





