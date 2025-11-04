<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function index() // Define the index method to display the list of tasks
    {
       $books = Book::all(); // Retrieve all bookings from the database
       return view('book', compact('books')); // Return the view with the retrieved bookings
    }

    public function book(Request $request)
    {
         $request->validate([
        'name' => 'required', // Validate that the 'title' field is required
       'email' => 'required',
       'phonenumber' => 'required',
       'roomtype' => 'required',
        'guest' => 'required',
        'request' => 'required',
        'checkin' => 'required',
        'checkout' => 'required',
        ]);

        // Create a new booking
        // Insert directly into DB to avoid mass-assignment issues if model isn't configured
        DB::table('books')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'roomtype' => $request->input('roomtype'),
            'guest' => $request->input('guest'),
            'request' => $request->input('request'),
            'checkin' => $request->input('checkin'),
            'checkout' => $request->input('checkout'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/welcome')->with('success','Reservation created.');
    }

    public function clientdashboard()
    {
        // récupérer uniquement les réservations de l'utilisateur connecté (par email)
        $books = Book::where('email', Auth::user()->email)->get();

        // envoyer les données à la vue (chemin 'register.clientdashboard')
        return view('register.clientdashboard', compact('books'));
    }
}

