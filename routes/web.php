<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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



Route::get('/', [LoginController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [LoginController::class, 'login'])
    ->name('login.attempt')
    ->middleware('guest');

Route::get('users/create', [UsersController::class, 'show'])
	->name('users.create.form')
	->middleware('auth');

Route::post('users/create', [UsersController::class, 'store'])
	->name('users.create')
	->middleware('auth');

Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/welcome', function () {
    return Inertia::render('Welcome');
})->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/invoices', InvoicesController::class)->middleware('auth');
