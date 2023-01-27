<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Platforms\ZoomController;
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
        return $request->user();
    });
    // Route::post('meetings', [ZoomController::class, 'store']);

    Route::get('appointments', [AppointmentController::class,'index']);
    Route::post('appointments', [AppointmentController::class,'store']);
});


