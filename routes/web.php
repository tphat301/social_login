<?php
/*
* Declaration Controller 
*/

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Routing Solutions
/**
 * 
 * FRONT END ROUTING
 * 
 * */
Route::get('/', [IndexController::class, 'index']);
Auth::routes(['verify' => true]);


/**
 * 
 * GOOGLE LOGIN ROUTING
 * 
 * */
Route::get('/get-info-google-login', [GoogleController::class, 'getInfoGoogleLogin']);
Route::get('/api/callback', [GoogleController::class, 'callbackLoginGoogle']);

/**
 * 
 * BACK END ROUTING
 * 
 * */
Route::middleware('auth')->group(function () {
    // Route Admin User
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
    Route::get('/users/index', [AdminUserController::class, 'index']);

    // Route Admin Product
    Route::get('/admin/product/index', [AdminProductController::class, 'index']);
    Route::get('/admin/product/create', [AdminProductController::class, 'create']);

    // Route Chart
    Route::get('/admin/chart/index', [MonthlyUsersChart::class, 'index'])->name('chart.index');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/admin');
})->name('logout.user');
