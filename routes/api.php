<?php

use App\Http\Controllers\ApiExampleController;
use Illuminate\Http\Request;
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

Route::get('/quote', [ApiExampleController::class, 'getRandomQuote'])->name("api.example.quote.random");
Route::get('/quotes', [ApiExampleController::class, 'getAllQuotes'])->name("api.example.quote.index");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
