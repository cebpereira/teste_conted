<?php

use App\Http\Controllers\UserController;
use App\Http\DataTables\UserDatatable;
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
Route::get('/', [UserController::class, 'index'])->name('usuario');
Route::get('/create', [UserController::class, 'viewCriarUser'])->name('usuario.create');
Route::get('/{id}/edit', [UserController::class, 'viewEditarUser'])->name('usuario.edit');
Route::get('/{id}/visualizar', [UserController::class, 'viewUser'])->name('usuario.view');

// DataTable
Route::get('/{id}', [UserDatatable::class, 'showUsers']);

// Database
Route::post('/', [UserController::class, 'store'])->name('usuario.db.store');
Route::put('/{id}', [UserController::class, 'update'])->name('usuario.db.update');
Route::delete('/{id}', [UserController::class, 'delete'])->name('usuario.db.delete');
