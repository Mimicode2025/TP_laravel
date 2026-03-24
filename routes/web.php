<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;

// Route::get('/students', 'StudentController@index');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::resource('categories', CategorieController::class);
Route::resource('livres', LivreController::class);