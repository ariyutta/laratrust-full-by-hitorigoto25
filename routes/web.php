<?php

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

// Untuk Administrator Login
Route::group(['middleware' =>['auth','role:administrator']], function() {
    Route::get('/dashboard', [App\Http\Controllers\Controller::class, 'index'])->name('dashboard');
});

// Untuk User Login
Route::group(['middleware' =>['auth', 'role:user']], function() {
    Route::get('/home', [App\Http\Controllers\Controller::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';