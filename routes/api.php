<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Players;

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

Route::get('/players', [Players::class, 'index']);

Route::get('/players/{player}', [Players::class, 'show']);

Route::post('/players', [Players::class, 'store']);

Route::put('/players/{player}', [Players::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
