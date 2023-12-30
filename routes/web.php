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

Route::resource('/api/category','App\Http\Controllers\CategoryController', ['names' => 'categories']);

Route::get('/{any}', function () {
    return view('layouts.app');
})->where('any', '.*');

Route::resource('api/group','App\Http\Controllers\GroupController', ['names' => 'group']);
Route::resource('api/account','App\Http\Controllers\AccountController', ['names' => 'account']);
// Route::resource('api/income-expense/role','App\Http\Controllers\IncomeExpenseController', ['names' => 'income.expense']);
// Route::resource('/api/products','App\Http\Controllers\ProductController', ['names' => 'products']);
// Route::resource('/api/stock','App\Http\Controllers\StockController', ['names' => 'stock']);
// Route::resource('/api/order','App\Http\Controllers\OrderController', ['names' => 'order']);
// Route::resource('/api/order/item','App\Http\Controllers\OrderItemController', ['names' => 'order.items']);
// Route::resource('/api/user','App\Http\Controllers\UserController', ['names' => 'user']);
// Route::resource('/api/user/role','App\Http\Controllers\UserRoleController', ['names' => 'user.role']);
// Route::resource('/api/store','App\Http\Controllers\UserController', ['names' => 'store']);
// Route::resource('/api/store/order','App\Http\Controllers\StoreOrderController', ['names' => 'store.order']);