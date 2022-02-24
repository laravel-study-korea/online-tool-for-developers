<?php

use App\Http\Controllers\GithubController;
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
Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/github',[GithubController::class, 'redirectToProvider'])
    ->name('auth.github');
Route::get('/auth/github-callback',[GithubController::class,'handleProviderCallback'])
    ->name('auth.github-callback');
