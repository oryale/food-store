<?php

use App\Http\Controllers\Delta\CatalogController;
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

// catalog
Route::get('/catalog', [CatalogController::class, 'index']);
Route::post('/catalog', [CatalogController::class, 'store']);
Route::get('/catalog/{id}', [CatalogController::class, 'show']);
Route::patch('/catalog/{id}', [CatalogController::class,'update']);
Route::delete('/catalog/{id}', [CatalogController::class, 'destroy']);