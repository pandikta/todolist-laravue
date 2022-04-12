<?php

use App\Http\Controllers\ItemControler;
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


Route::get('/items', [ItemControler::class, 'index']);

Route::prefix('/item')->group(function () {
    Route::post('/store', [ItemControler::class, 'store']);
    Route::put('/{id}', [ItemControler::class, 'update']);
    Route::delete('/{id}', [ItemControler::class, 'destroy']);
});
