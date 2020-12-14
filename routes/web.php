<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;

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




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('auth/github', 'App\Http\Controllers\Auth\GithubController@redirectToProvider');
    Route::get('auth/github/callback', 'App\Http\Controllers\Auth\GithubController@handleGithubCallback');

Route::resource('jobs', JobController::class);
Route::resource('contacts', ContactController::class);
Route::resource('contacts', ApplicationController::class);
