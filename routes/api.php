<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\DeskController;

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

//Бесполезная трата пространства
// Route::get('/desks', [DeskController::class, 'index']); 
// Route::get('/desks/{id}', [DeskController::class, 'show']);
// Route::get('/desks', 'App\Http\Controllers\DeskController@index');


Route::apiResources([
    'desks' => DeskController::class
]);
