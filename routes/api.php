<?php

use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/provincias', [ProvinciaController::class, 'index']);


// tickets

Route::get('/get-tickets', [TicketController::class, 'index']);
Route::get('/get-tickets/{id}', [TicketController::class, 'show']);
Route::post('/tickets', [TicketController::class, 'store']);
Route::put('/update-tickets/{id}', [TicketController::class, 'update']);
Route::delete('/delete-tickets/{id}', [TicketController::class, 'destroy']);
