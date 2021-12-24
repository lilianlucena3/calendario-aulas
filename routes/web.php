<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;

/** Rota */
Route::resource('aulas', AulaController::class);
