<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Page Controller
Route::get('/login', [PageController::class, 'login'])->name('viewLogin');
Route::get('/two-factor-authentication', [PageController::class], 'twoFactorAuth')->name('viewTwoFactorAuth');
Route::get('/forgot-password', [PageController::class, 'forgotPassword'])->name('viewForgotPassword');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('viewDashboard');

// User Authentication Controller
Route::post('/login-user', [AuthController::class, 'login'])->name('login-user');
Route::post('/validate-email', [AuthController::class, 'validateAndSendTwoFactorCode'])->name('validate-email');
Route::post('/password-reset', [AuthController::class, 'resetPassword'])->name('password-reset');

