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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('admin', 'API\ManagementController');
Route::get('dailyrecord', 'API\ManagementController@dailyrecord');
Route::get('profile', 'API\ManagementController@profile');
Route::get('inv', 'API\ManagementController@inv');
Route::apiResource('doctor', 'API\DoctorCommentController');

