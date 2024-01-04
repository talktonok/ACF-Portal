<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\DuesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaidDuesController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/add', [UserController::class, 'addUser']);

// Events Routes
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

// Donations Routes
Route::get('/donations', [DonationController::class, 'index']);
Route::get('/donations/{id}', [DonationController::class, 'show']);
Route::post('/donations', [DonationController::class, 'store']);
Route::put('/donations/{id}', [DonationController::class, 'update']);
Route::delete('/donations/{id}', [DonationController::class, 'destroy']);

// Paid Dues Routes
Route::get('/paid-dues', [PaidDuesController::class, 'index']);
Route::get('/paid-dues/{id}', [PaidDuesController::class, 'show']);
Route::post('/paid-dues', [PaidDuesController::class, 'store']);
Route::put('/paid-dues/{id}', [PaidDuesController::class, 'update']);
Route::delete('/paid-dues/{id}', [PaidDuesController::class, 'destroy']);

// Dues Routes
Route::get('/dues', [DuesController::class, 'index']);
Route::get('/dues/{id}', [DuesController::class, 'show']);
Route::post('/dues', [DuesController::class, 'store']);
Route::put('/dues/{id}', [DuesController::class, 'update']);
Route::delete('/dues/{id}', [DuesController::class, 'destroy']);
