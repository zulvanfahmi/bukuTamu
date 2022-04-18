<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukutamuDashboardController;
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

// Route::get('/login',[LoginController::class, 'index'])->middleware('guest')->name('login');
Route::get('/',[LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/bukutamus', BukutamuDashboardController::class)->middleware('auth');

Route::get('/forbidden', function () {
    return 'this page is forbidden, please go back !';
});
