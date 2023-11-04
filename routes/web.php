<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
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

//Home
Route::get('/', function () {
    return view('home');
});

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

Auth::routes();

// Logout
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');

// Cadastro
Route::get('register', [RegisterController::class, 'showForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

//Usuário
Route::prefix('user')
    ->group(__DIR__ . '/user.php');
