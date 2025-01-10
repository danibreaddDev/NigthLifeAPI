<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ClubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource("clubs",ClubController::class);
Route::apiResource("events",eventController::class);
