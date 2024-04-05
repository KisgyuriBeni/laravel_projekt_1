<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentingController;
use App\Http\Controllers\RenterController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kolcsonzesek', [RentingController::class, "getRentings"]);
Route::post('/kolcsonzesek', [RentingController::class, "addRenting"]);
Route::get('/kolcsonzesek/{id}', [RentingController::class, "getRenting"]);
Route::put('/kolcsonzesek/{id}', [RentingController::class, "updateRenting"]);
Route::delete('/kolcsonzesek/{id}', [RentingController::class, "deleteRenting"]);
Route::get('/kolcsonzok', [RenterController::class, "getRenters"]);
Route::get('/kolcsonzok/{id}', [RenterController::class, "getRenterById"]);