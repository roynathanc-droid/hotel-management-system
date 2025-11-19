<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Occupancy Report - Admin | The Kicukiro Heights</title>
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
      margin: 2rem 0 1rem 0;
    }
    .overview {
      width: 90%;
      max-width: 900px;
      margin: 0 auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      padding: 2rem;
      text-align: center;
    }
    .overview h3 {
      font-size: 1.3rem;
      margin-bottom: 1rem;
    }
    .rate {
      font-size: 2.5rem;
      color: #D4AF37;
      font-weight: bold;
    }
    table {
      width: 90%;
      max-width: 700px;
      margin: 2rem auto 3rem auto;
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
    <a href="/admindashboard" class="back-btn">← Back to Dashboard</a>
  </header>

  <h1>Occupancy Overview</h1>

  <div class="overview">
    <h3>Today's Occupancy</h3>
    <div class="rate">{{ round($occupancyRate) }}%</div>
    <p>{{ $occupiedToday }} rooms occupied out of 50 total.</p>
  </div>

  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Occupied Rooms</th>
      </tr>
    </thead>
    <tbody>
      @foreach($weekData as $day)
      <tr>
        <td>{{ $day['date'] }}</td>
        <td>{{ $day['count'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/welcome">Home</a></p>
  </footer>
</body>
</html>
