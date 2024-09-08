<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // $request->session->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Show register form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle register
    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'telp'      => 'required|numeric',
            'password'  => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'telp'      => $request->telp,
            'password'  => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect('/');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
