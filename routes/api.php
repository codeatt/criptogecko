<?php

use App\Http\Controllers\CoinController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes​
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/products/search/{coin}', [CoinController::class, 'search']);
// return Product::where('name', 'like', '%'.$name.'%')->get();

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/userdata', [AuthController::class, 'userdata']);
    Route::get('/{coin}', [CoinController::class, 'show']);

    Route::post('/price', [CoinController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
