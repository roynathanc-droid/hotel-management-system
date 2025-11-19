<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index() // Define the index method to display the list of tasks
    {
       $reservation = Reservation::all(); // Retrieve all tasks from the database
        return view('reservation.index'); // Return the 'tasks.index' view with the retrieved tasks
    }
    

    public function store(Request $request) // Define the store method to handle task creation
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
        reservation::create([
        'name'=> $request->name,
       'email'=> $request->email,
        'phonenumber'=> $request->phonenumber,  
        'roomtype'=> $request->roomtype,
        'guest'=> $request->guest,
       'request'=> $request->request,
        'checkin'=> $request->checkin,
        'checkout'=> $request->checkout,
         ]);
        return ('clientdashboard'); // Redirect the user back to the previous page
       

        }
        public function clientdashboard()
    {
        /*$request->validate([
        'name' => 'required', // Validate that the 'title' field is required
        'email' => 'required',
    ]);

      //Retrieve the student
    $client = Client::where('name', $request->name, 'email', $request->email,
    'phonenumber', $request->phonenumber)->first();

    // Check existence and password
    if ($client && $request->password === $student->password) {
        session(['client_email' => $client->email,'client_name'=>$student->name, 
        'student_phonenumber'=>$student->phonenumber, 
        ]);
        // Store email in session*/
        return view('clientdashboard');
    }

    }

        
    