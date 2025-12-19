<?php

use App\Http\Controllers\api\ExploreController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/explore', ExploreController::class);
Route::post('/refresh-token', [UserController::class, 'refreshToken']);
Route::post('/login', [UserController::class, 'login']);
    