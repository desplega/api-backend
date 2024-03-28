<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->get('/token', function (Request $request) {
    $token = $request->user()->createToken('quantum-api-token');
 
    return ['token' => $token->plainTextToken];
});
