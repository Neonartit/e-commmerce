<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserAccessController;
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
    return view('welcome');
});

Auth::routes();
//Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Repository
Route::get('/repository', [App\Http\Controllers\RepositoryController::class, 'index'])->name('repository');

//Todo list
Route::get('/todo-list', [App\Http\Controllers\TodolistController::class, 'index'])->name('todo-list');

//reports
Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports');

//Users access
Route::get('/users-access', [App\Http\Controllers\UserAccessController::class, 'index'])->name('users-access');
