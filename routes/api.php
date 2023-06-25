<?php

use App\Http\Controllers\ApiController\NewApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/new')->group(function () {
    Route::get('/index', [NewApiController::class, 'index']);
    Route::get('/show/{id}', [NewApiController::class, 'show']);
    Route::get('getPost', [NewApiController::class, 'getPost']);
});
