<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;



Route::resource('products', ProductController::class);
Route::get('/graph', [ProductController::class,'graph']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
