<?php

use App\Http\Controllers\InstitutionsController;
use App\Http\Controllers\InstitutionsTypeController;
use App\Models\InstitutionType;
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

//login route for AuthController authentication using sanctum package
Route::post('/login', [AuthController::class, 'login']);


Route::apiResource('institutions', InstitutionsController::class);
Route::post('institutions/search' , [InstitutionsController::class ,'search']);
Route::apiResource('institutions_types',InstitutionsTypeController::class);
