<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // return view("admins.login");
        return view("auth.login");
        
    }

    public function authenticate_admin(Request $request)
    {
        dd("aa");
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
}
