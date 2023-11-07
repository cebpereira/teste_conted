<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = request(['email', 'password']);
        
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return view('auth.login')->with('error', 'Credenciais inválidas.');
        }
    }

    public function logout()
    {
        auth()->logout();
        Artisan::call('cache:clear');

        return redirect()->route('login');
    }
}
