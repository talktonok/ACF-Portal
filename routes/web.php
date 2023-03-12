<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard/chapters', [App\Http\Controllers\DashboardController::class, 'chapters'])->name('chapters');
Route::get('/dashboard/chapters/add', [App\Http\Controllers\DashboardController::class, 'addChapters'])->name('addChapters');
Route::post('/dashboard/chapters/add', [ChapterController::class, 'addChapter'])->name('addChapters');

Auth::routes();

Route::get('/dashboard/events', [App\Http\Controllers\DashboardController::class, 'events'])->name('events');

Auth::routes();

Route::get('/dashboard/excos', [App\Http\Controllers\DashboardController::class, 'excos'])->name('excos');


Auth::routes();

Route::get('/dashboard/members', [DashboardController::class, 'members'])->name('users');

Auth::routes();

Route::get('/dashboard/members/add', [DashboardController::class, 'addMember'])->name('addMember');
Route::post('/dashboard/members/add', [UserController::class, 'addUser']);
Route::get('/dashboard/members', [DashboardController::class, 'getAllMemebers'])->name('member');
Route::get('/dashboard/members/edit/{id}', [DashboardController::class, 'getMember'])->name('member');

Route::get('/dashboard/admins/', [DashboardController::class, 'getAllAdmin'])->name('admins');
Route::get('/dashboard/admins/add', [DashboardController::class, 'addAdmin']);
Route::get('/dashboard/admins/edit/{id}', [DashboardController::class, 'getAdmin']);
Route::post('/dashboard/admins/add', [UserController::class, 'addUser']);




