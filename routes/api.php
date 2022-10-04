<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Networth;
use App\Models\Prayer;
use App\Http\Controllers\NetworthController;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\HomeController;

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
Route::get('/home', [HomeController::class, 'index']);

Route::post('/home/create', [HomeController::class, 'create']);

Route::put('/home/update/{net}', [HomeController::class, 'update']);

Route::delete('/home/delete/{net}', [HomeController::class, 'delete']);

/*API for Networth*/
Route::get('/networth', [NetworthController::class, 'index']);

Route::post('/networth/create', [NetworthController::class, 'create']);

Route::put('/networth/update/{net}', [NetworthController::class, 'update']);

Route::delete('/networth/delete/{net}', [NetworthController::class, 'delete']);

/*API for Investment*/

/*API for Goal*/
Route::get('/goal', [GoalController::class, 'index']);

Route::get('/goal/{type}', [GoalController::class, 'getGoalBasedType']);

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

/*API for Surah*/
Route::get('/surah', [SurahController::class, 'index']);

Route::post('/surah/create', [SurahController::class, 'create']);

Route::put('/surah/update/{id}', [SurahController::class, 'update']);

Route::delete('/surah/delete/{id}', [SurahController::class, 'delete']);

/*API for Donation*/
Route::get('/donation', [DonationController::class, 'index']);

Route::post('/donation/create', [DonationController::class, 'create']);

Route::put('/donation/update/{id}', [DonationController::class, 'update']);

Route::put('/donation/update/total/{id}', [DonationController::class, 'updateTotal']);

Route::delete('/donation/delete/{id}', [DonationController::class, 'delete']);


