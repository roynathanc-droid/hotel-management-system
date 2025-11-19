<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index() // Define the index method to display the list of tasks
    {
       $client = client::all(); // Retrieve all tasks from the database
        return view('index'); // Return the 'tasks.index' view with the retrieved tasks
    }

    public function clientdashboard()
    {
        /*$request->validate([
        'name' => 'required', // Validate that the 'title' field is required
       'email' => 'required',
    ]);

      Retrieve the student
    $client = Client::where('name', $request->name, 'email', $request->email,
    'phonenumber', $request->phonenumber)->first();

     Check existence and password
    if ($client && $request->password === $student->password) {
        session(['client_email' => $client->email,'client_name'=>$student->name, 
        'student_phonenumber'=>$student->phonenumber, 
        ]);
         Store email in session*/
        return view('clientdashboard');
    }

    public function admin()
    {
        return view('admin');
    }

    public function finedining()
    {
        return view('finedining');
    }

    public function rooftop()
    {
        return view ('rooftop');
    }

    public function coffeelounge()
    {
        return view ('coffeelounge');
    }

    public function businesslounge()
    {
        return view ('businesslounge');
    }

    public function services()
    {
        return view ('services');
    }

    public function luxuryshuttle()
    {
        return view ('luxuryshuttle');
    }

    public function digitalconcierge()
    {
        return view ('digitalconcierge');
    }

    public function facilities()
    {
        return view ('facilities');
    }

    public function infinitypool()
    {
        return view ('infinitypool');
    }

    public function spa()
    {
        return view ('spa');
    }

    public function fitness()
    {
        return view ('fitness');
    }

    public function valet()
    {
        return view ('valet');
    }

    public function wifi()
    {
        return view ('wifi');
    }

    public function artgallery()
    {
        return view ('artgallery');
    }
}