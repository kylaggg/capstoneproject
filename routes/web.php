<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EvaluationYearController;
Use App\Http\Controllers\AdminDashboardController;

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

// Auth Controller
Route::get('/login', [AuthController::class, 'displayLogin'])->name('viewLogin');
Route::get('/two-factor-auth', [AuthController::class, 'displayTwoFactorAuth'])->name('viewTwoFactorAuth');
Route::get('/reset-password-1', [AuthController::class, 'displayResetPassword'])->name('viewResetPassword');
Route::get('/reset-password-2', [AuthController::class, 'displayResetPassword2'])->name('viewResetPassword2');
Route::get('/reset-password-3', [AuthController::class, 'displayResetPassword3'])->name('viewResetPassword3');
Route::post('/login-user', [AuthController::class, 'login'])->name('login-user');
Route::post('/two-factor', [AuthController::class, 'verifyTwoFactorAuth'])->name('verify-code');
Route::post('/reset-password/verify-email', [AuthController::class, 'step1_VerifyEmail'])->name('reset-password-verify-email');
Route::post('/reset-password/verify-code', [AuthController::class, 'step2_VerifyCode'])->name('reset-password-verify-code');
Route::post('/reset-password/reset', [AuthController::class, 'step3_ResetPassword'])->name('reset-password');
Route::get('two-factor/resend-code', [AuthController::class, 'sendCode'])->name('resend-code');

// Dashboard 
Route::get('/dashboard-admin', [AdminDashboardController::class, 'displayAdminDashboard'])->name('viewAdminDashboard');

// Employee User Table
Route::get('/employees', [EmployeeController::class,'displayEmployeeTable'])->name('viewEmployeeTable');

// Evaluation Year
Route::get('evaluation-year', [EvaluationYearController::class,'displayEvaluationYear'])->name('viewEvaluationYear');