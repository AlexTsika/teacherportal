<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // If authentication is successful, redirect to the desired page
        return redirect()->route('home')->with('success', 'Login successful!');

        // If authentication fails, redirect back to the login form with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}