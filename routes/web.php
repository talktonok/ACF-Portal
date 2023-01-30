<?php

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

Auth::routes();

Route::get('/dashboard/events', [App\Http\Controllers\DashboardController::class, 'events'])->name('events');

Auth::routes();

Route::get('/dashboard/excos', [App\Http\Controllers\DashboardController::class, 'excos'])->name('excos');


Auth::routes();

Route::get('/dashboard/members', [DashboardController::class, 'members'])->name('users');

Auth::routes();

Route::get('/dashboard/members/add', [DashboardController::class, 'addMember'])->name('addMember');
Route::post('/dashboard/members/add', [UserController::class, 'addUser']);




