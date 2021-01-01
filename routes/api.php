<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V01\Auth\AuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1/auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
});
