<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThingsController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\AboutController;

Route::get('/design', [DesignController::class, 'index'])->name('design');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');
Route::get('/goals', [GoalsController::class, 'index'])->name('goals');
Route::get('/sports', [SportsController::class, 'index'])->name('sports');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/games', [GamesController::class, 'index'])->name('games');
Route::get('/things', [ThingsController::class, 'index'])->name('things');
Route::get('/about', [AboutController::class, 'index'])->name('about');