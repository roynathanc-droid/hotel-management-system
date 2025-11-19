<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guest List - Admin | The Kicukiro Heights</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f8fa;
      color: #2C3E50;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #2C3E50;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #D4AF37;
    }
    a.back-btn {
      color: #D4AF37;
      text-decoration: none;
      font-size: 0.9rem;
    }
    h1 {
      text-align: center;
      margin: 2rem 0;
    }
    table {
      width: 90%;
      max-width: 1100px;
      margin: 0 auto 3rem auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 10px;
      overflow: hidden;
    }
    th {
      background: #f0f2f5;
      color: #555;
      text-align: left;
      padding: 1rem;
    }
    td {
      padding: 1rem;
      border-top: 1px solid #eee;
    }
    tr:hover {
      background: #fafafa;
    }
    footer {
      background: #1a252f;
      color: #ddd;
      text-align: center;
      padding: 1rem;
    }
    footer a {
      color: #D4AF37;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">KICUKIRO HEIGHTS</div>
    <a href="/admin/admindashboard" class="back-btn">← Back to Dashboard</a>
  </header>

  <h1>Guest List</h1>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Room</th>
        <th>Check-In</th>
        <th>Check-Out</th>
      </tr>
    </thead>
    <tbody>
      @foreach($guests as $guest)
      <tr>
        <td>{{ $guest->name }}</td>
        <td>{{ $guest->email }}</td>
        <td>{{ $guest->phone }}</td>
        <td>{{ $guest->roomtype }}</td>
        <td>{{ \Carbon\Carbon::parse($guest->checkin)->format('M d, Y') }}</td>
        <td>{{ \Carbon\Carbon::parse($guest->checkout)->format('M d, Y') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/">Home</a></p>
  </footer>
</body>
</html>
