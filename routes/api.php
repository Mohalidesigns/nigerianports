<?php

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/npa','ApiController@create');
// Route::get('/npa','ApiController@show');
// Route::get('/npa1/{vregistration}','ApiController@showbyvregistration');
// Route::get('/npa/{id}','ApiController@showbyid');

Route::get('/npa', [App\Http\Controllers\ApiController::class, 'create']);
Route::get('/npa', [App\Http\Controllers\ApiController::class, 'show']);
Route::get('/npa1/{vregistration}', [App\Http\Controllers\ApiController::class, 'showbyvregistration']);

Route::get('/npa/{id}', [App\Http\Controllers\ApiController::class, 'showbyid']);


Route::get('/rims/{id}', [App\Http\Controllers\RimsController::class, 'showbyid']);


Route::get('/ebs/{id}', [App\Http\Controllers\EbsController::class, 'showbyid']);
