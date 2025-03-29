<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

/*
|-------------------------------------------------------------------------- 
| API Routes
|-------------------------------------------------------------------------- 
| 
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
| 
*/

// Obtener datos de los partidos
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para GameController
Route::apiResource('games', GameController::class);

// Rutas para operaciones PATCH de un juego
Route::patch('games/{id}/goals', [GameController::class, 'updateGoals']);
Route::patch('games/{id}/yellowcards', [GameController::class, 'addYellowCard']);
Route::patch('games/{id}/redcards', [GameController::class, 'addRedCard']);
Route::patch('games/{id}/extratime', [GameController::class, 'addExtraTime']);
