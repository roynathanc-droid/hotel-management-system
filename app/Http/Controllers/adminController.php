<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Carbon\Carbon;

class AdminController extends Controller
{
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

        return view('register.admin', compact(
            'recentBookings',
            'currentGuests',
            'todaysOccupancy'
        ));
    }

    public function guests()
{
    $guests = Book::select('name', 'email', 'phonenumber', 'roomtype', 'checkin', 'checkout')
        ->orderByDesc('checkin')
        ->paginate(10);

    return view('admin.guests', compact('guests'));
}

public function occupancy()
{
    $totalRooms = 50; // Exemple : à remplacer par ta table rooms plus tard
    $today = \Carbon\Carbon::today();

    // Occupation du jour
    $occupiedToday = Book::whereDate('checkin', '<=', $today)
        ->whereDate('checkout', '>=', $today)
        ->count();

    $occupancyRate = $totalRooms > 0 ? ($occupiedToday / $totalRooms) * 100 : 0;

    // Historique des 7 derniers jours
    $weekData = [];
    for ($i = 6; $i >= 0; $i--) {
        $day = $today->copy()->subDays($i);
        $count = Book::whereDate('checkin', '<=', $day)
            ->whereDate('checkout', '>=', $day)
            ->count();
        $weekData[] = [
            'date' => $day->format('M d'),
            'count' => $count
        ];
    }

    return view('admin.occupancy', compact('occupiedToday', 'occupancyRate', 'weekData'));
}

}
