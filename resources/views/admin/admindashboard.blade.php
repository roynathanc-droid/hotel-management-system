<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - The Kicukiro Heights</title>
    <style>
        /* ===== BASE STYLES ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f5f8fa; color: #2C3E50; }
        .container { width: 95%; max-width: 1400px; margin: 0 auto; }

        /* ===== SIDEBAR ===== */
        .sidebar { background-color: #2C3E50; color: white; width: 250px; height: 100vh; position: fixed; top: 0; left: 0; padding: 1.5rem 0; }
        .sidebar-header { padding: 0 1.5rem 1.5rem; border-bottom: 1px solid #3d5166; }
        .sidebar-brand { font-size: 1.5rem; font-weight: bold; color: #D4AF37; text-decoration: none; display: block; margin-bottom: 0.5rem; }
        .sidebar-subtitle { font-size: 0.85rem; color: #a3b1c2; }
        .sidebar-nav { padding: 1.5rem 0; }
        .nav-title { color: #a3b1c2; font-size: 0.75rem; text-transform: uppercase; padding: 0 1.5rem; margin-bottom: 0.5rem; }
        .nav-item { padding: 0.5rem 1.5rem; }
        .nav-link { color: white; text-decoration: none; display: flex; align-items: center; padding: 0.5rem 0; transition: all 0.3s; }
        .nav-link:hover { color: #D4AF37; }
        .nav-link i { margin-right: 0.75rem; width: 20px; text-align: center; }
        .nav-link.active { color: #D4AF37; font-weight: 500; }

        /* ===== MAIN CONTENT ===== */
        .main-content { margin-left: 250px; padding: 1.5rem; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #e0e6ed; }
        .page-title h1 { font-size: 1.75rem; color: #2C3E50; }
        .user-menu { display: flex; align-items: center; }
        .user-menu img { width: 40px; height: 40px; border-radius: 50%; margin-right: 0.75rem; }
        .user-name { font-weight: 500; }

        /* ===== STATS CARDS ===== */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem; }
        .stat-card { background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .stat-card-header { display: flex; justify-content: space-between; margin-bottom: 1rem; }
        .stat-card-title { color: #6c757d; font-size: 0.9rem; }
        .stat-card-value { font-size: 1.75rem; font-weight: 600; color: #2C3E50; }
        .stat-card-change { display: flex; align-items: center; font-size: 0.85rem; }
        .change-up { color: #28a745; }
        .change-down { color: #dc3545; }

        /* ===== DATA CARDS ===== */
        .data-card { background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 1.5rem; overflow: hidden; }
        .data-card-header { padding: 1rem 1.5rem; border-bottom: 1px solid #e0e6ed; display: flex; justify-content: space-between; align-items: center; }
        .data-card-title { font-weight: 500; color: #2C3E50; }
        .data-card-actions a { color: #6c757d; text-decoration: none; margin-left: 1rem; font-size: 0.9rem; }
        .data-card-body { padding: 1.5rem; }
        .table { width: 100%; border-collapse: collapse; }
        .table th { text-align: left; padding: 0.75rem 1rem; background-color: #f8f9fa; color: #495057; font-weight: 600; border-bottom: 1px solid #e0e6ed; }
        .table td { padding: 1rem; border-bottom: 1px solid #e0e6ed; color: #495057; }
        .table tr:last-child td { border-bottom: none; }

        /* ===== BADGES ===== */
        .status-badge { display: inline-block; padding: 0.35em 0.65em; font-size: 0.75em; font-weight: 700; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem; }
        .status-confirmed { background-color: #d4edda; color: #155724; }
        .status-pending { background-color: #fff3cd; color: #856404; }
        .status-cancelled { background-color: #f8d7da; color: #721c24; }
        .status-checked-in { background-color: #cce5ff; color: #004085; }

        /* ===== BUTTONS ===== */
        .btn { display: inline-block; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; padding: 0.375rem 0.75rem; font-size: 0.875rem; line-height: 1.5; border-radius: 0.25rem; transition: all 0.3s; text-decoration: none; cursor: pointer; border: 1px solid transparent; }
        .btn-sm { padding: 0.25rem 0.5rem; font-size: 0.75rem; }
        .btn-primary { color: #fff; background-color: #D4AF37; border-color: #D4AF37; }
        .btn-primary:hover { background-color: #c9a227; border-color: #c9a227; }
        .btn-outline-secondary { color: #6c757d; background-color: transparent; border-color: #6c757d; }
        .btn-outline-secondary:hover { color: #fff; background-color: #6c757d; border-color: #6c757d; }

        /* ===== ROOM STATUS ===== */
        .room-status { display: flex; flex-wrap: wrap; gap: 0.75rem; }
        .room-status-item { width: calc(20% - 0.75rem); background: white; border-radius: 8px; padding: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.05); text-align: center; }
        .room-number { font-weight: 600; margin-bottom: 0.5rem; }
        .room-type { color: #6c757d; font-size: 0.85rem; margin-bottom: 0.5rem; }
        .room-available { color: #28a745; font-size: 0.85rem; }
        .room-occupied { color: #dc3545; font-size: 0.85rem; }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">KICUKIRO HEIGHTS</a>
            <div class="sidebar-subtitle">Hotel Management System</div>
        </div>
        <div class="sidebar-nav">
            <div class="nav-title">Main</div>
            <div class="nav-item"><a href="#" class="nav-link active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></div>
            <div class="nav-title">Management</div>
            <div class="nav-item"><a href="#" class="nav-link"><i class="fas fa-bed"></i> Rooms</a></div>
            <div class="nav-item"><a href="/admin/bookings" class="nav-link"><i class="fas fa-calendar-check"></i> Bookings</a></div>
            <div class="nav-item"><a href="/admin/guests" class="nav-link"><i class="fas fa-users"></i> Guests</a></div>
            <div class="nav-item"><a href="#" class="nav-link"><i class="fas fa-concierge-bell"></i> Services</a></div>
            <div class="nav-title">Reports</div>
            <div class="nav-item"><a href="/admin/occupancy" class="nav-link"><i class="fas fa-chart-line"></i> Occupancy</a></div>
            <div class="nav-item"><a href="#" class="nav-link"><i class="fas fa-money-bill-wave"></i> Revenue</a></div>
            <div class="nav-title">System</div>
            <div class="nav-item"><a href="#" class="nav-link"><i class="fas fa-users-cog"></i> Staff</a></div>
            <div class="nav-item"><a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div class="page-title"><h1>Admin Dashboard</h1></div>
            <div class="user-menu"><img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Admin User"><div class="user-name">Admin User</div></div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-card-title">Current Guests</div>
                <div class="stat-card-value">{{ $currentGuests }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-title">Today's Occupancy</div>
                <div class="stat-card-value">{{ round($todaysOccupancy) }}%</div>
            </div>
        </div>

        <!-- Recent Bookings -->
        <div class="data-card">
            <div class="data-card-header">
                <div class="data-card-title">Recent Bookings</div>
                <div class="data-card-actions"><a href="/admin/bookings">View All</a></div>
            </div>
            <div class="data-card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Guest</th>
                            <th>Room</th>
                            <th>Dates</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentBookings as $booking)
                        @php
                            $today = \Carbon\Carbon::today();
                            if(\Carbon\Carbon::parse($booking->checkin)->lte($today) && \Carbon\Carbon::parse($booking->checkout)->gte($today)){
                                $statusClass = 'status-checked-in';
                                $statusText = 'Checked In';
                            } elseif(\Carbon\Carbon::parse($booking->checkin)->gt($today)){
                                $statusClass = 'status-pending';
                                $statusText = 'Pending';
                            } else {
                                $statusClass = 'status-cancelled';
                                $statusText = 'Finished';
                            }
                        @endphp
                        <tr>
                            <td>#KH-{{ $booking->id }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->roomtype }}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->checkin)->format('M d') }} - {{ \Carbon\Carbon::parse($booking->checkout)->format('M d, Y') }}</td>
                            <td><span class="status-badge {{ $statusClass }}">{{ $statusText }}</span></td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
            </div>
        </div>
    </div>
</body>
</html>
