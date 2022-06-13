<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Import controlles [nameSpace\nameClass]
use App\Http\Controllers\ConsolasController;
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

Route::get('brands/get',[ConsolasController::class, "getBrands"]);
