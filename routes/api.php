<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories/new', [CategoryController::class, 'store']);

Route::get('services/search', [ServicesController::class, 'search']);
Route::get('services', [ServicesController::class, 'index']);
Route::get('services/{service:id}', [ServicesController::class, 'show']);
Route::post('services/new', [ServicesController::class, 'store']);



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
