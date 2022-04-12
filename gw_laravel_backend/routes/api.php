<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getRecipe', [RecipeController::class,'getData']);
Route::post('addRecipe', [RecipeController::class,'add']);
Route::post('updateRecipe', [RecipeController::class,'update']);
Route::post('removeRecipe', [RecipeController::class,'remove']);