<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

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

Route::get('/', [CustomersController::class, 'home'])->name('home');
Route::get('/customers/create', [CustomersController::class, 'createForm'])->name('customer.form');
Route::post('/customers/create', [CustomersController::class, 'save'])->name('customer.save');
Route::get('/customers/{id}/edit', [CustomersController::class, 'editForm'])->name('customer.edit.form');
Route::get('/customers/{id}/delete', [CustomersController::class, 'delete'])->name('customer.delete');
