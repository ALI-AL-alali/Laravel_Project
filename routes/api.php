<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::prefix('user')->group(function () {
// });
// Route::post('/addVehicle', [VehicleController::class, 'add_vehicle']);
// Route::get('/Show_vehicle', [VehicleController::class, 'Show_Vehicle']);
//  Route::get('/sh/{id}', [VehiclesController::class, 'show']);
//  Route::post('/createcar', [VehiclesController::class, 'store']);
//
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
