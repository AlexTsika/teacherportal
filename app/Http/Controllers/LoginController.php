<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Perform authentication logic here (e.g., check credentials against the database)
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication successful
            return redirect()->route('home')->with('success', 'Login successful!');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }
    }
}