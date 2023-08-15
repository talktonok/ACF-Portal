<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
