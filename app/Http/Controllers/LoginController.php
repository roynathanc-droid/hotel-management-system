<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('register.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/clientdashboard');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/welcome');
    }
}
