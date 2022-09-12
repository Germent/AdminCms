<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\TransactionController;

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
    return redirect('/login');
});


Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/dashboard', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'productList']);
Route::get('/product/form', [ProductController::class, 'productForm']);
Route::post('/product/form', [ProductController::class, 'productSave']);
Route::get('/product/delete', [ProductController::class, 'productDelete']);

Route::get('/categories', [ProductController::class, 'categoriesList']);
Route::get('/categories/form', [ProductController::class, 'categoriesForm']);
Route::post('/categories/form', [ProductController::class, 'categoriesSave']);
Route::get('/categories/delete', [ProductController::class, 'categoriesDelete']);

Route::get('/voucher', [VoucherController::class, 'voucherList']);
Route::get('/voucher/form', [VoucherController::class, 'voucherForm']);
Route::post('/voucher/form', [VoucherController::class, 'voucherSave']);
Route::get('/voucher/delete', [VoucherController::class, 'voucherDelete']);

Route::get('/transaction', [TransactionController::class, 'transactionList']);
Route::get('/transaction/create', [TransactionController::class, 'transactionCreate']);
Route::post('/transaction/create', [TransactionController::class, 'transactioncreateTrx']);
Route::get('/transaction/form', [TransactionController::class, 'transactionForm']);
Route::post('/transaction/form', [TransactionController::class, 'transactioncreateTrx']);


