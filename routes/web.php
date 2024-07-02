<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
return view('welcome');
});

Route::get('about_me', function () {
return view('about_me');
});

Route::get('skills', function () {
return view('skills');
});

Route::get('hobbies', function () {
return view('hobbies');
});