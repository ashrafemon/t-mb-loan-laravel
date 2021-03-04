<?php

use App\Http\Controllers\Api\ApiController;
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

Route::get('/loans', [ApiController::class, 'fetchLoans'])->name('api.loans');
Route::get('/configure', [ApiController::class, 'fetchConfigure'])->name('api.configure');
Route::get('/office', [ApiController::class, 'fetchOffice'])->name('api.office');
Route::post('/appointment', [ApiController::class, 'appointment'])->name('api.appointment');
