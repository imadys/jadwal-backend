<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Platforms\ZoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
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

Route::group(['auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        if ($request->user()) {
            return $request->user();
        } else {
            return
                response()->json([
                    'errors' => "You are not logged in!",
                ], 422);;
        }
    });
    // Route::post('meetings', [ZoomController::class, 'store']);

    // Services
    Route::get('services', [ServicesController::class, 'index']);
    Route::post('services', [ServicesController::class, 'store']);
    Route::get('services/{service}', [ServicesController::class, 'edit']);
    Route::put('services/{service}', [ServicesController::class, 'update']);
    // Appointments
    Route::get('appointments', [AppointmentController::class, 'index']);

});
// Profile
Route::post('/appointments', [AppointmentController::class, 'store']);
Route::get('/profile/{username}', [ProfileController::class, 'show']);
