<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tasks', [TaskController::class, 'createTask']);
Route::get('/tasks/{id?}', [TaskController::class, 'readTask']);
Route::put('/tasks/{id}', [TaskController::class, 'updateTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);
