<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\AdminAppraisalsOverviewController;
use App\Http\Controllers\Admin\EditableAppraisalFormController;
use App\Http\Controllers\Admin\EditableInternalCustomerFormController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\EvaluationYearController;
use App\Http\Controllers\Admin\AdminDashboardController;

use App\Http\Controllers\ImmediateSuperior\ISAppraisalsOverviewController;
use App\Http\Controllers\ImmediateSuperior\ISDashboardController;

use App\Http\Controllers\PermanentEmployee\PEAppraisalsController;
use App\Http\Controllers\PermanentEmployee\PEDashboardController;
use App\Http\Controllers\PermanentEmployee\PEInternalCustomerController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;


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
Route::get('/dashboard-immediate-superior', [ISDashboardController::class, 'displayISDashboard'])->name('viewISDashboard');

/* ----- ADMIN ----- */
//Appraisals Overview
Route::get('/admin-appraisals-overview', [AdminAppraisalsOverviewController::class, 'displayAdminAppraisalsOverview'])->name('viewAdminAppraisalsOverview');

// Employee User Table
Route::get('/employees', [EmployeeController::class,'displayEmployeeTable'])->name('viewEmployeeTable');

// Evaluation Year
Route::get('/evaluation-year', [EvaluationYearController::class,'displayEvaluationYear'])->name('viewEvaluationYear');

// Editable Appraisal Form
Route::get('/editable-appraisal-form', [EditableAppraisalFormController::class, 'displayEditableAppraisalForm'])->name('viewEditableAppraisalForm');

// Editable Internal Customer Form
Route::get('/editable-internal-customer-form', [EditableInternalCustomerFormController::class, 'displayEditableInternalCustomerForm'])->name('viewEditableInternalCustomerForm');

/* ----- IMMEDIATE SUPERIOR ----- */
// Appraisals Overview
Route::get('/is-appraisals-overview', [ISAppraisalsOverviewController::class, 'displayISAppraisalsOverview'])->name('viewISAppraisalsOverview');

// Settings
Route::get('/settings', [SettingsController::class, 'displaySettings'])->name('viewSettings');

/* ----- PERMANENT EMPLOYEE ----- */
Route::get('pe-dashboard', [PEDashboardController::class, 'displayPEDashboard'])->name('viewPEDashboard');

Route::get('pe-appraisals-overview', [PEAppraisalsController::class, 'displayPEAppraisalsOverview'])->name('viewPEAppraisalsOverview');

Route::get('pe-internal-customers-overview', [PEInternalCustomerController::class, 'displayICOverview'])->name('viewICOverview');