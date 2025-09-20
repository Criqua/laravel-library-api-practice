<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::apiResource('libros', BookController::class); // Acceder url: /api/libros