<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Bookings - Admin | The Kicukiro Heights</title>
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f9f9f9; margin: 0; color: #2C3E50; }
    .container { width: 90%; max-width: 1200px; margin: 2rem auto; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    h1 { color: #D4AF37; text-align: center; margin-bottom: 2rem; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #ddd; }
    th { background: #f1f1f1; color: #333; }
    tr:hover { background-color: #fafafa; }
    .btn-back { display: inline-block; padding: 0.7rem 1.2rem; background: #D4AF37; color: white; border-radius: 6px; text-decoration: none; transition: 0.3s; }
    .btn-back:hover { background: #b58f27; }
    .pagination { margin-top: 1.5rem; text-align: center; }
    .pagination a { margin: 0 5px; text-decoration: none; color: #2C3E50; padding: 5px 10px; border: 1px solid #ccc; border-radius: 5px; }
    .pagination .active { background: #D4AF37; color: white; border-color: #D4AF37; }
  </style>
</head>
<body>
  <div class="container">
    <h1>All Bookings</h1>

    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Guest</th>
          <th>Email</th>
          <th>Room Type</th>
          <th>Special Requests</th>
          <th>Check-in</th>
          <th>Check-out</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allBookings as $booking)
        @php
            $today = \Carbon\Carbon::today();
            if(\Carbon\Carbon::parse($booking->checkin)->lte($today) && \Carbon\Carbon::parse($booking->checkout)->gte($today)){
                $status = 'Checked In';
            } elseif(\Carbon\Carbon::parse($booking->checkin)->gt($today)){
                $status = 'Upcoming';
            } else {
                $status = 'Completed';
            }
        @endphp
        <tr>
          <td>#KH-{{ $booking->id }}</td>
          <td>{{ $booking->name }}</td>
          <td>{{ $booking->email }}</td>
          <td>{{ $booking->roomtype }}</td>
          <td>{{ $booking->request }}</td>
          <td>{{ \Carbon\Carbon::parse($booking->checkin)->format('M d, Y') }}</td>
          <td>{{ \Carbon\Carbon::parse($booking->checkout)->format('M d, Y') }}</td>
          <td>{{ $status }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="pagination">
      {{ $allBookings->links() }}
    </div>

    <a href="/admindashboard" class="btn-back">← Back to Dashboard</a>
  </div>
</body>
</html>
