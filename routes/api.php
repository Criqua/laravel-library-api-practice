<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LibraryUserController;

// Acceder desde /api/...
Route::apiResource('libros', BookController::class);
Route::apiResource('prestamos', LoanController::class);
Route::apiResource('usuarios', LibraryUserController::class);