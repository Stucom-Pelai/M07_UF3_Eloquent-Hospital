<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        // return view("admins.login");
        return view("auth.login");
    }

    public function authenticate_admin(Request $request)
    {


        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role_id == 1) {
            return redirect()->intended('patients/settings');
        }

        return redirect('admin')->with('error', 'Oppes! You have entered invalid credentials');
    }
}
