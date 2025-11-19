<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kicukiro Heights | Luxury 5-Star Hotel</title>
    <style>
        /* ===== BASE STYLES ===== */
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* ===== HEADER ===== */
        header {
            background-color: #2C3E50;
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #D4AF37;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #D4AF37;
        }
        
        /* ===== HERO SECTION ===== */
        .hero {
            height: 80vh;
            background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 3rem;
        }
        
        .hero-content {
            width: 100%;
            padding: 0 20px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .btn {
            display: inline-block;
            background: #D4AF37;
            color: #2C3E50;
            padding: 0.8rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        
        .btn:hover {
            background: #c9a227;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* ===== SECTIONS ===== */
        section {
            padding: 3rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            color: #2C3E50;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* ===== ROOMS ===== */
        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .room-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .room-img {
            height: 200px;
            overflow: hidden;
        }
        
        .room-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .room-card:hover .room-img img {
            transform: scale(1.1);
        }
        
        .room-info {
            padding: 1.5rem;
        }
        
        .room-info h3 {
            color: #2C3E50;
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }
        
        .room-info p {
            color: #666;
            margin-bottom: 1rem;
            min-height: 60px;
        }
        
        .price {
            color: #D4AF37;
            font-weight: bold;
            font-size: 1.2rem;
            margin: 1rem 0;
            display: block;
        }
        
        /* ===== SERVICES ===== */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: #D4AF37;
            margin-bottom: 1rem;
        }
        
        .service-card h3 {
            color: #2C3E50;
            margin-bottom: 1rem;
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
        
        /* ===== FACILITIES ===== */
        .facilities {
            background: #2C3E50;
            color: white;
            padding: 4rem 0;
        }
        
        .facilities .section-title h2,
        .facilities .section-title p {
            color: white;
        }
        
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }
        
        .facility-item {
            padding: 1.5rem;
        }
        
        .facility-icon {
            font-size: 2rem;
            color: #D4AF37;
            margin-bottom: 1rem;
        }
        
        /* ===== FOOTER ===== */
        footer {
            background: #1a252f;
            color: white;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            color: #D4AF37;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column ul li a:hover {
            color: #D4AF37;
        }
        
        .copyright {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid #2C3E50;
            color: #aaa;
            font-size: 0.9rem;
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- ===== HEADER ===== -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">THE KICUKIRO HEIGHTS</div>
                <div class="nav-links">
                    <a href="/">Home</a>
                    <a href="#rooms">Rooms</a>
                    <a href="/services">Services</a>
                    <a href="/facilities">Facilities</a>
                    <a href="/book">Book Now</a>
                    <a href="/register">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>THE KICUKIRO HEIGHTS</h1>
            <p>Elevate Your Stay. Discover Kigali From the Heights.</p>
            <a href="/book" class="btn">Book Your Stay</a>
        </div>
    </section>

    <!-- ===== ROOMS SECTION ===== -->
    <section id="rooms">
        <div class="container">
            <div class="section-title">
                <h2>Our Luxury Accommodations</h2>
                <p>Experience unparalleled comfort in our exquisite rooms and suites</p>
            </div>
            
            <div class="room-grid">
                <!-- Presidential Suite -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Presidential Suite">
                    </div>
                    <div class="room-info">
                        <h3>Presidential Suite</h3>
                        <p>The epitome of luxury with panoramic views of Kigali. Perfect for dignitaries and those seeking the finest accommodations.</p>
                        <span class="price">$500 / night</span>
                        <a href="/book" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Executive Suite -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/e4/5c/a0/caption.jpg?w=900&h=-1&s=1" alt="Executive Suite">
                    </div>
                    <div class="room-info">
                        <h3>Executive Suite</h3>
                        <p>Spacious and elegant accommodations for business travelers, featuring a separate living area and premium amenities.</p>
                        <span class="price">$300 / night</span>
                        <a href="/book" class="btn">Book Now</a>
                    </div>
                </div>
                
                <!-- Deluxe Room -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="https://www.ethnohotels.com/media/yftnb0n0/ethno-hotel-deluxe-sea-large-image.jpg" alt="Deluxe Room">
                    </div>
                    <div class="room-info">
                        <h3>Deluxe Room</h3>
                        <p>Stylish comfort with premium bedding, modern furnishings, and stunning city or pool views.</p>
                        <span class="price">$200 / night</span>
                        <a href="/book" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES SECTION ===== -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Premium Services</h2>
                <p>Exceptional services designed to make your stay unforgettable</p>
            </div>
            
            <div class="services-grid">
                <!-- Fine Dining -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Fine Dining</h3>
                    <p>Experience <em>Imbuto Fusion</em> restaurant with gourmet international and local cuisine</p>
                </div>
                
                <!-- Rooftop Bar -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    <h3>Rooftop Bar</h3>
                    <p><em>SkyKigali</em> offers panoramic views with premium cocktails and lounge atmosphere</p>
                </div>
                
                <!-- Coffee Lounge -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <h3>Coffee Lounge</h3>
                    <p><em>Rwagasabo Café</em> serves specialty coffee and light meals throughout the day</p>
                </div>
                
                <!-- Business Center -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Business Lounge</h3>
                    <p>Fully equipped coworking space with meeting rooms and professional services</p>
                </div>
                
                <!-- Shuttle Service -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Luxury Shuttle</h3>
                    <p>Tesla and Range Rover shuttle service available for hotel guests</p>
                </div>
                
                <!-- Digital Concierge -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Digital Concierge</h3>
                    <p>24/7 app-based concierge service for all your needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FACILITIES SECTION ===== -->
    <section class="facilities" id="facilities">
        <div class="container">
            <div class="section-title">
                <h2>World-Class Facilities</h2>
                <p>Designed for your comfort and convenience</p>
            </div>
            
            <div class="facilities-grid">
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3>Infinity Pool</h3>
                    <p>Stunning rooftop pool on Level 10</p>
                </div>
                
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Spa & Wellness</h3>
                    <p>850 m² spa with sauna, hammam, and massage rooms</p>
                </div>
                
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Fitness Center</h3>
                    <p>24/7 smart gym with premium equipment</p>
                </div>
                
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-parking"></i>
                    </div>
                    <h3>Valet Parking</h3>
                    <p>Underground secured parking</p>
                </div>
                
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>High-Speed WiFi</h3>
                    <p>Complimentary throughout the hotel</p>
                </div>
                
                <div class="facility-item">
                    <div class="facility-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Art Gallery</h3>
                    <p>Featuring rotating local artists</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== BOOKING SECTION ===== -->
    <section id="booking">
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
        <form method="POST" action="{{ url('/book') }}" class="mb-4">
             @csrf
        <div class="container">
            <div class="section-title">
                <h2>Book Your Stay</h2>
                <p>Reserve your luxury experience at The Kicukiro Heights</p>
            </div>
            
            <!-- <form class="booking-form" id="reservationForm"> -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" required>
                    </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="room-type">Room Type</label>
                        <select id="room-type" name="room_type" required>
                            <option value="">-- Select Room --</option>
                            <option value="presidential">Presidential Suite ($500/night)</option>
                            <option value="executive">Executive Suite ($300/night)</option>
                            <option value="deluxe">Deluxe Room ($200/night)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="guests">Number of Guests</label>
                        <select id="guests" name="guests" required>
                            <option value="1">1 Adult</option>
                            <option value="2">2 Adults</option>
                            <option value="3">3 Adults</option>
                            <option value="4">4 Adults</option>
                        </select>
                    </div>
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
                    <label for="requests">Special Requests</label>
                    <textarea id="requests" name="requests" rows="4" placeholder="Any special requirements or preferences..."></textarea>
                </div>
                
                <button type="submit" class="form-submit">Complete Reservation</button>
            </form>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>THE KICUKIRO HEIGHTS</h3>
                    <p>KG 510 Street, Kicukiro District<br>
                    Kigali, Rwanda</p>
                    <p>Phone: +250 123 456 789<br>
                    Email: info@kicukiroheights.com</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#rooms">Rooms & Suites</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/facilities">Facilities</a></li>
                        <li><a href="/book">Book Now</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="/finedining">Dining</a></li>
                         <li><a href="/rooftop">Rooftop Bar</a></li>
                         <li><a href="/coffeelounge">Coffee lounge</a></li>
                         <li><a href="/businesslounge">business Lounge</a></li>
                        <li><a href="/spa">Spa & Wellness</a></li>
                        <!-- <li><a href="#">Meeting Rooms</a></li> -->
                        <li><a href="#">Transportation</a></li>
                        <li><a href="#">Concierge</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Facilities</h3>
                    <ul>
                        <li><a href="/infinitypool">Infinity Pool</a></li>
                        <li><a href="/spa">Spa & Wellness</a></li>                     
                        <li><a href="/fitness">Fitness Center</a></li>
                        <li><a href="/valet">Valet Parking</a></li>
                        <li><a href="/wifi">High-Speed Wi-Fi</a></li>
                        <li><a href="/artgallery">Art Gallery</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <!-- <h3>Connect With Us</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    </ul> -->
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; {{ date('Y') }} The Kicukiro Heights. All Rights Reserved. | Designed with ❤️ for luxury travelers</p>
            </div>
        </div>
    </footer>
</body>
</html>