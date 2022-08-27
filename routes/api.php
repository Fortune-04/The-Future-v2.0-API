<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Networth;
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

Route::post('/networth/add', [NetworthController::class, 'add']);

Route::put('/networth/update/{net}', [NetworthController::class, 'update']);

Route::delete('/networth/delete/{net}', [NetworthController::class, 'delete']);

/*API for Investment*/

/*API for Goal*/

/*API for Property*/

/*API for Prayer*/

/*API for Donation*/

