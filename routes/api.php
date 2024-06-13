<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaTipoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('agendaTipo', AgendaTipoController::class);

Route::apiResource('agenda', AgendaController::class);


Route::fallback(function(){
    return response()->json([
        'error' => 'Resource not found'
    ], 404);
});

