<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DuesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaidDuesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::prefix('dashboard/')->group(function () {
        Route::get('chapters', [DashboardController::class, 'chapters'])->name('chapters');
        Route::get('chapters/add', [DashboardController::class, 'addChapters'])->name('addChapters');
        Route::post('chapters/add', [ChapterController::class, 'addChapter'])->name('addChapters');
        Route::get('events', [DashboardController::class, 'events'])->name('events');
        Route::get('excos', [DashboardController::class, 'excos'])->name('excos');
        Route::get('members', [DashboardController::class, 'members'])->name('users');
        Route::get('members/add', [DashboardController::class, 'addMember'])->name('addMember');
        Route::post('members/add', [UserController::class, 'addUser']);
        Route::get('members', [DashboardController::class, 'getAllMemebers'])->name('member');
        Route::get('members/edit/{id}', [DashboardController::class, 'getMember'])->name('member');

        Route::get('admins/', [DashboardController::class, 'getAllAdmin'])->name('admins');
        Route::get('admins/add', [DashboardController::class, 'addAdmin']);
        Route::get('admins/edit/{id}', [DashboardController::class, 'getAdmin']);
        Route::post('admins/add', [UserController::class, 'addUser']);
    });
});

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
