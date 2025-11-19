<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book - The Kicukiro Heights</title>
    
    <!-- Style intégré (pas besoin de fichier séparé) -->
    <style>
        /* Reset de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #2C3E50;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.2rem;
        }
        
        .hotel-info {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }
        
        .hotel-image {
            width: 200px;
            height: 150px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 1.5rem;
        }
        
        .hotel-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hotel-details h2 {
            color: #2C3E50;
            margin-bottom: 0.5rem;
        }
        
        .hotel-details p {
            color: #666;
            margin-bottom: 0.3rem;
        }
        
        /* ===== BOOKING FORM ===== */
        .booking-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2C3E50;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #D4AF37;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .form-submit {
            background: #D4AF37;
            color: #2C3E50;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 2rem auto 0;
        }
        
        .form-submit:hover {
            background: #c9a227;
            transform: translateY(-3px);
        }

        /* Section récapitulative */
        .booking-summary {
            background: #f9f9f9;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
            border-left: 4px solid #D4AF37;
        }
        
        .booking-summary h3 {
            margin-bottom: 1rem;
            color: #2C3E50;
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .summary-item strong {
            color: #2C3E50;
        }
        
        .total {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Online Booking</h1>
        
        <!-- Info sur l'hôtel -->
        <div class="hotel-info">
            <div class="hotel-image">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="The Kicukiro Heights">
            </div>
            <div class="hotel-details">
                <h2>THE KICUKIRO HEIGHTS</h2>
                <p>★★★★★ Hôtel 5 étoiles</p>
                <p>KG 510 Street, Kicukiro District, Kigali, Rwanda</p>
                <p>Tel: +250 123 456 789</p>
            </div>
        </div>
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <!-- Formulaire de réservation -->
        <form method="POST" action="{{ url('/book') }}" class="mb-4">
             @csrf
            <!--form id="reservationForm"-->
            <div class="booking-form">
                <!-- Colonne 1 -->
                <div>
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="tel" name="phonenumber" required>
                    </div>
                </div>
                
                <!-- Colonne 2 -->
                <div>
                    
                    
                    <div class="form-row">
                    <div class="form-group">
                        <label for="roomtype">Room Type</label>
                        <select id="roomtype" name="roomtype" required>
                            <option value="">-- Select Room --</option>
                            <option value="presidential">Presidential Suite ($500/night)</option>
                            <option value="executive">Executive Suite ($300/night)</option>
                            <option value="deluxe">Deluxe Room ($200/night)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="guest">Number of Guests</label>
                        <select id="guest" name="guest" required>
                            <option value="1">1 Adult</option>
                            <option value="2">2 Adults</option>
                            <option value="3">3 Adults</option>
                            <option value="4">4 Adults</option>
                        </select>
                    </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="checkin">Check-in Date</label>
                        <input type="date" name="checkin" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="checkout">Check-out Date</label>
                        <input type="date" name="checkout" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="request">Special Requests</label>
                    <textarea id="request" name="request" rows="4" placeholder="baby bed, diet,etc..."></textarea>
                </div>
                
                <button type="submit" class="form-submit">Complete Reservation</button>
            </div>
            
            <!-- Récapitulatif -->
            <!-- <div class="booking-summary">
                <h3>Summary of your reservation</h3>
                <div class="summary-item">
                    <span>Type of rooms:</span>
                    <strong id="summary-room-type">-</strong>
                </div>
                <div class="summary-item">
                    <span>Price by night:</span>
                    <strong id="summary-price">$0</strong>
                </div>
                <div class="summary-item">
                    <span>Number of Guests:</span>
                    <strong id="summary-guests">0</strong>
                </div>
                <div class="total">
                    <span>Estimed Total:</span>
                    <strong id="summary-total">$0</strong>
                </div>
            </div> -->
            
            
        </form>
    </div>
    </body>
    </html>