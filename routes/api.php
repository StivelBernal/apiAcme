<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VehicleController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login']);
    Route::post('/logout', [JWTController::class, 'logout']);
    Route::post('/refresh', [JWTController::class, 'refresh']);
    Route::post('/profile', [JWTController::class, 'profile']);
});

Route::group(['prefix' => 'persons'], function($router) {
    Route::get("/drivers", [PersonController::class, 'indexDrivers']);
    Route::get("/all", [PersonController::class, 'index']);
    Route::get("/owners", [PersonController::class, 'indexOwners']);
    Route::post("/add", [PersonController::class, 'store']);
});


Route::group(['prefix' => 'vehicles'], function($router) {
    Route::get("/all",[VehicleController::class, 'index']);
    Route::post("/add",[VehicleController::class, 'store']);
});
