<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Personnages;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/serie/{serie_id}/characters', function ($serie_id) {
    $personnages = Personnages::getpersonnage($serie_id);
    return response()->json($personnages);
});