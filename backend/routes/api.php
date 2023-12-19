<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ManhwaController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

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
//Manhwa
Route::get('/manhwas', [ManhwaController::class, 'index']);
Route::post('/manhwas', [ManhwaController::class, 'store']);
Route::get('/manhwas/{manhwa}/image', [ManhwaController::class, 'getImage']);
Route::get('/manhwas/{manhwa}', [ManhwaController::class, 'show']);


//Reader/Favorites
Route::get('/readers/{reader}', [ReaderController::class, 'show']);
Route::put('/readers/{reader}', [ReaderController::class, 'update']);
Route::delete('/readers/{reader}', [ReaderController::class, 'destroy']);
Route::get('/readers', [ReaderController::class, 'index']);
Route::post('/readers', [ReaderController::class, 'store']);

//Reader=Favorites
Route::get('/populars', [PopularController::class, 'index']);
Route::get('/populars/{popular}', [PopularController::class, 'show']);
