<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductsController;
use app\Http\Controllers\CategoriesController;
use app\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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
    return view('landing');
});


Auth::routes();
// backend products
Route::get('/backend/products', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/backend/products/add', [App\Http\Controllers\ProductsController::class, 'add']);
Route::get('/backend/products/edit', [App\Http\Controllers\ProductsController::class, 'edit']);
Route::get('/backend/products/update', [App\Http\Controllers\ProductsController::class, 'update']);

// backend categories
Route::get('/backend/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/backend/categories/add', [App\Http\Controllers\CategoriesController::class, 'add']);
Route::get('/backend/categories/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::get('/backend/categories/update', [App\Http\Controllers\CategoriesController::class, 'update']);

// backend users
Route::get('/backend/users', [App\Http\Controllers\UsersController::class, 'index']);
