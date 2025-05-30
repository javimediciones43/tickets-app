<?php

use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\TicketController;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// provincia
Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/get-provincia-tickets/{id}', [TicketController::class, 'getProvinciaTickets']);


// tickets

Route::get('/get-tickets', [TicketController::class, 'index']);
Route::get('/get-tickets/{id}', [TicketController::class, 'show']);
Route::post('/tickets', [TicketController::class, 'store']);
Route::put('/update-tickets/{id}', [TicketController::class, 'update']);
Route::delete('/delete-tickets/{id}', [TicketController::class, 'destroy']);
