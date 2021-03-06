<?php

use App\Http\Controllers\DishController;
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

Route::get('dishes/{dish}', [DishController::class, 'show']);

Route::get('dishes/', [DishController::class, 'index']);

Route::get('dishes/{dish}', [DishController::class, 'edit']);

Route::post('dishes/', [DishController::class, 'store']);

Route::delete('dishes/{dish}', [DishController::class, 'destroy']);

Route::put('dishes/{dish}', [DishController::class, 'update']);



