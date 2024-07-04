<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;

Route::get('/', function () {
    return view('Welcome');
})->name('Welcome');

Route::get('/about-me', [AboutMeController::class, 'aboutme']);
Route::get('/skills', [SkillsController::class, 'skills']);
Route::get('/hobbies', [HobbiesController::class, 'hobbies']);