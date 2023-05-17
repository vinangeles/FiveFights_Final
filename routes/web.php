<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments');
Route::get('/tournaments/add', [TournamentController::class, 'create'])->name('add');
Route::post('/tournaments/store', [TournamentController::class, 'store'])->name('store');
Route::get('/tournaments/edit/{id}', [TournamentController::class, 'edit'])->name('edit');
Route::post('/tournaments/update/{id}', [TournamentController::class, 'update'])->name('update');
Route::delete('/tournaments/delete/{id}', [TournamentController::class, 'destroy'])->name('delete');
Route::get('/teams', [TeamController::class, 'index'])->name('teams');
Route::get('/teams/create', [TeamController::class, 'create'])->name('create');
Route::post('/teams/store', [TeamController::class, 'store'])->name('store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
