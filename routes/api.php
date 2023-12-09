<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NrcController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\QuarterController;
use App\Http\Controllers\Api\TownshipController;
use App\Http\Controllers\Api\FormBuilderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    // Route::apiResource('/formbuilders', FormBuilderController::class)
    // ->parameters([
    //     'id' => 'FormTemplate:id', // Use 'post' as the route parameter name and 'uuid' as the column name in the database
    // ]);;
    Route::get('/formbuilders/{formtemplate}', [FormBuilderController::class, 'show']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/regions', [RegionController::class, 'index']);

Route::get('/townships', [TownshipController::class, 'index']);

Route::get('/quarters', [QuarterController::class, 'index']);

Route::get('/nrcs', [NrcController::class, 'index']);
