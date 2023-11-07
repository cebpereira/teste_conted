<?php

use App\Http\Controllers\UserController;
use App\Http\Datatables\UserDatatable;
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


// Views
Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/users', [UserController::class, 'viewShowUsers'])->name('user.users');
Route::get('/create', [UserController::class, 'viewCreateUser'])->name('user.create');
Route::get('/{id}/edit', [UserController::class, 'viewEditUser'])->name('user.edit');
Route::get('/{id}/view', [UserController::class, 'viewUser'])->name('user.view');

// DataTable
Route::get('/show_users', [UserDatatable::class, 'showUsers']);

// Database
Route::post('/', [UserController::class, 'store'])->name('user.db.store');
Route::put('/{id}/edit', [UserController::class, 'update'])->name('user.db.update');
Route::get('/{id}/delete', [UserController::class, 'delete'])->name('user.db.delete');