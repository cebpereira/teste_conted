<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\DataTables\UserDatatable;
use Illuminate\Support\Facades\Login;
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

//Tela Inicial
Route::get('/home', function () {
    return view('home');
})->name('home');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Auth::routes();

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Cadastro
Route::get('register', [RegisterController::class, 'showForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Rotas de Usuário
Route::prefix('user')
    ->group(__DIR__ . '/web/user.php');

