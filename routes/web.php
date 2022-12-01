<?php

use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestationController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource("prestations", PrestationController::class);
Route::resource("users", UserController::class);


Route::get('/accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('accueil');
Route::get('/rdv', [App\Http\Controllers\RdvController::class, 'index'])->name('rdv');
Route::get('/forfaits',[ForfaitController::class,'index'])->name('forfaits');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show')->whereNumber('id');

Route::get('/useredit/{id}',[UserController::class,'edit'])->name('user.edit')->whereNumber('id');

Route::post('/users/create',[UserController::class,'store'])->name('user.store');

Route::delete('/users/{user}',[UserController::class,'delete'])->name('user.delete');

Route::put('/useredit',[UserController::class,'update'])->name('user.update');
