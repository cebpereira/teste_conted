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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function (){
    return view('auth.login');
});

Route::get('/register', function (){
    return view('auth.register');
});

Route::get('/users', function (){
    return view('user.users');
});

// localhost/$id/edit
Route::get('/edit', function (){
    return view('user.edit');
});

Route::get('/list_users', function (){
    return view('user.list_users');
});