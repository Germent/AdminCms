<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
Route::get('/product', [ProductController::class, 'product']);

Route::get('/categories', [ProductController::class, 'categoriesList']);
Route::get('/categories/form', [ProductController::class, 'categoriesForm']);
Route::post('/categories/form', [ProductController::class, 'categoriesSave']);
