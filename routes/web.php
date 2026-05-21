<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/skills', 'skills')->name('skills');

Route::view('/projects', 'projects')->name('projects');

Route::view('/trainings', 'trainings')->name('trainings');

Route::view('/experience', 'experience')->name('experience');

Route::view('/contact', 'contact')->name('contact');


