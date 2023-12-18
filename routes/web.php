<?php

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
Route::resource('/user/role','App\Http\Controllers\UserRoleController', ['names' => 'user.role']);
Route::resource('/group','App\Http\Controllers\GroupController', ['names' => 'group']);
Route::resource('/account','App\Http\Controllers\AccountController', ['names' => 'account']);
Route::resource('/income-expense/role','App\Http\Controllers\IncomeExpenseController', ['names' => 'income-expense']);
Route::resource('/categories','App\Http\Controllers\CategoryController', ['names' => 'categories']);
Route::resource('/stock','App\Http\Controllers\StockController', ['names' => 'stock']);
Route::resource('/order','App\Http\Controllers\OrderController', ['names' => 'order']);
Route::resource('/order/item','App\Http\Controllers\OrderItemController', ['names' => 'order.items']);