<?php

use App\Http\Controllers\BasicOperationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/add/{number1}/{number2}', [BasicOperationController::class, 'add']);
Route::get('/subs/{number1}/{number2}', [BasicOperationController::class, 'substraction']);
Route::get('/mult/{number1}/{number2}', [BasicOperationController::class, 'multiplication']);
Route::get('/div/{number1}/{number2}', [BasicOperationController::class, 'division']);
