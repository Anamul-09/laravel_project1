<?php

use App\Http\Controllers\Api\DogsController;
use App\Http\Controllers\api\ProductController as ApiProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php
// Route::namespace('Api')->group(function () {
// Route::apiResource('dogs', DogsController::class);
// });



Route::resource('products', ApiProductController::class);
