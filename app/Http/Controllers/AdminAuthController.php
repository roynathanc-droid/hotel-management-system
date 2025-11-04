<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except(['showLoginForm', 'login', 'showRegisterForm', 'register']);
    }


    public function showRegisterForm()
    {
        return view('admin.registerAdmin');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'phonenumber' => 'required|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/loginAdmin')->with('success', 'Admin created successfully.');
    }

    public function showLoginForm()
    {
        return view('admin.loginAdmin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
    $request->session()->regenerate();
    return redirect('/admindashboard')->with('success', 'Logged in successfully.');
}


        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
       Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/loginAdmin')->with('success', 'You have been logged out.');
    }

    public function dashboard()
    {
        $today = Carbon::today();

        // 1️⃣ Réservations récentes (les 5 dernières)
        $recentBookings = Book::orderBy('created_at', 'desc')->take(5)->get();

        // 2️⃣ Clients actuellement check-in
        $currentGuests = Book::whereDate('checkin','<=',$today)
                             ->whereDate('checkout','>=',$today)
                             ->count();

        // 3️⃣ Taux d’occupation aujourd’hui
        $totalRooms = 50; // change selon ton hôtel
        $occupiedRooms = Book::whereDate('checkin','<=',$today)
                             ->whereDate('checkout','>=',$today)
                             ->count();
        $todaysOccupancy = ($occupiedRooms / $totalRooms) * 100;

        return view('admin.admindashboard', compact(
            'recentBookings',
            'currentGuests',
            'todaysOccupancy'
        ));
    }


    
}

