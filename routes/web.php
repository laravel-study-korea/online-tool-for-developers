<?php

use App\Http\Controllers\SocialLoginController;
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

Route::get('/auth/{SocialLoginService}}', [SocialLoginController::class, 'redirectToProvider'])
    ->name('auth.{SocialLoginService}');
Route::get('/auth/{SocialLoginService}-callback', [SocialLoginController::class, 'handleProviderCallback'])
    ->name('auth.{SocialLoginService}-callback');
