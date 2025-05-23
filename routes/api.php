<?php

use App\Http\Controllers\ProvinciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/provincias', [ProvinciaController::class, 'index']);
