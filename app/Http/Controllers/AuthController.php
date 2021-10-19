<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|confirmed|min:3|max:30',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            ///bcrypt( ميسود لتشفير الباسورد)
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);

        $request->session()->flash('success-msg', 'you registered  successfly');

        return redirect('/login');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:3|max:30',
        ]);
        $islogin = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$islogin) {
            $request->session()->flash('error-msg', 'credentials not correct');
            return back();
        }
        $request->session()->flash('success-msg', 'you logged in successfly');
        return redirect(url('/cats'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
