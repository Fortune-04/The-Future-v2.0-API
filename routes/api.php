<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Networth;
use App\Models\Prayer;
use App\Http\Controllers\NetworthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*API for Home*/

/*API for Networth*/
Route::get('/networth', [NetworthController::class, 'index']);

Route::post('/networth/create', [NetworthController::class, 'create']);

Route::put('/networth/update/{net}', [NetworthController::class, 'update']);

Route::delete('/networth/delete/{net}', [NetworthController::class, 'delete']);

/*API for Investment*/

/*API for Goal*/
Route::get('/goal', [GoalController::class, 'index']);

Route::post('/goal/create', [GoalController::class, 'create']);

Route::put('/goal/update/{id}', [GoalController::class, 'update']);

Route::delete('/goal/delete/{id}', [GoalController::class, 'delete']);

/*API for Property*/
Route::get('/property', [PropertyController::class, 'index']);

Route::post('/property/create', [PropertyController::class, 'create']);

Route::put('/property/update/{id}', [PropertyController::class, 'update']);

Route::delete('/property/delete/{id}', [PropertyController::class, 'delete']);

/*API for Prayer*/
Route::get('/prayer', [PrayerController::class, 'index']);

Route::post('/prayer/create', [PrayerController::class, 'create']);

Route::put('/prayer/update/{id}', [PrayerController::class, 'update']);

Route::delete('/prayer/delete/{id}', [PrayerController::class, 'delete']);

/*API for Donation*/
Route::get('/donation', [DonationController::class, 'index']);

Route::post('/donation/create', [DonationController::class, 'create']);

Route::put('/donation/update/{id}', [DonationController::class, 'update']);

Route::delete('/donation/delete/{id}', [DonationController::class, 'delete']);


