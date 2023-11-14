<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminlogin(Request $request)
    {
        dd($request->all());
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect('/admin-panel');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
