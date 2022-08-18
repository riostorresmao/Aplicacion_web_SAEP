<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\ShoppingController;
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

Route::resource('bills',BillsController::class);
Route::resource('deliveries',DeliveriesController::class);
Route::resource('orders',OrdersController::class);
Route::resource('routes',RoutesController::class);
Route::resource('shoppinges',ShoppingController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
