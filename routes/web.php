<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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
Route::controller(PageController::class)->group(function(){
    Route::get('/login', 'login');
});

// User Authentication Controller
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
});