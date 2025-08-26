<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    // Show login page
    public function showLogin() {
        return view('auth.login');
    }

    // Show register page
    public function showRegister() {
        return view('auth.register');
    }

    // Register new user
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Account created! Please login.');
    }

    // Login
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login details']);
    }

    // Logout
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
