<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


// RECIPES
Route::get('/recipe/index', [RecipeController::class, 'index'])->name('recipes_index');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe_create');

Route::post('/recipe/store', [RecipeController::class, 'store'])->name('recipe_store');

Route::get('/recipe/show/{recipe}', [RecipeController::class, 'show'])->name('recipe_show');

Route::get('/recipe/edit/{recipe}', [RecipeController::class, 'edit'])->name('recipe_edit');

Route::put('/recipe/{recipe}', [RecipeController::class, 'update'])->name('recipe_update');

Route::delete('/recipe/{recipe}', [RecipeController::class, 'destroy'])->name('recipe_destroy');