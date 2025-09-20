<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

// Acceder desde /api/...
Route::apiResource('libros', BookController::class);
Route::apiResource('prestamos', LoanController::class);