<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CocktailController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


use Illuminate\Support\Facades\Auth;

Auth::routes();
require __DIR__.'/auth.php';
/*  */
Route::get('/cocktails', [CocktailController::class, 'index'])->name('cocktails.index');
Route::post('/cocktails/store/{cocktailId}', [CocktailController::class, 'store'])->name('cocktails.store');
Route::get('/cocktails/show', [CocktailController::class, 'show'])->name('cocktails.show');
Route::get('/cocktails/{id}/edit', [CocktailController::class, 'edit'])->name('cocktails.edit');
Route::put('/cocktails/{id}', [CocktailController::class, 'update'])->name('cocktails.update');
Route::delete('/cocktails/{id}', [CocktailController::class, 'destroy'])->name('cocktails.destroy');
Route::get('/cocktails/show', [CocktailController::class, 'show'])->name('cocktails.show');

/* Route::middleware('auth')->get(function () {
    Route::get('/cocktails', [CocktailController::class, 'index'])->name('cocktails.index');
    Route::post('/cocktails/store/{cocktailId}', [CocktailController::class, 'store'])->name('cocktails.store');
    Route::get('/cocktails/{id}/edit', [CocktailController::class, 'edit'])->name('cocktails.edit');
    Route::put('/cocktails/{id}', [CocktailController::class, 'update'])->name('cocktails.update');
    Route::delete('/cocktails/{id}', [CocktailController::class, 'destroy'])->name('cocktails.destroy');
}); */
Auth::routes();

Route::get('/home', [CocktailController::class, 'show'])->name('cocktails.show');


