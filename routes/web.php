<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SystemAdminController;
use App\Http\Middleware\Authenticate;
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


Route::controller(SystemAdminController::class)->group(function () {
    Route::get('/', 'showAdminDashboard')->middleware(Authenticate::class)->name('home');
    Route::get('/customersMange','CustomerMange')->middleware(Authenticate::class)->name('customers.show');
});



Route::controller(AuthController::class)->group(function () {
    Route::get('/login',  'showLoginForm')->name('showlogin');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});


