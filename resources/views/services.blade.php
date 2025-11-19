<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | The Kicukiro Heights</title>
  <style>
    /* === GLOBAL === */
    body { 
      margin: 0; 
      font-family: 'Poppins', sans-serif; 
      background-color: #f9f9f9; 
      color: #333;
    }
    header {
      background: #2C3E50;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #D4AF37;
      letter-spacing: 1px;
    }
    .nav-links a {
      color: white;
      margin-left: 1.5rem;
      text-decoration: none;
      transition: color 0.3s;
    }
    .nav-links a:hover {
      color: #D4AF37;
    }

    /* === HERO === */
    .hero {
      height: 60vh;
      background: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1350&q=80') no-repeat center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
    }
    .hero h1 {
      font-size: 3rem;
    }

    /* === SERVICES GRID === */
    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      width: 90%;
      max-width: 1100px;
      margin: 3rem auto;
    }
    .service-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .service-card:hover {
      transform: translateY(-5px);
    }
    .service-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }
    .service-content {
      padding: 1.5rem;
      text-align: center;
    }
    .service-content h3 {
      color: #2C3E50;
      margin-bottom: 0.5rem;
    }
    .service-content p {
      color: #555;
      font-size: 0.95rem;
      line-height: 1.5;
      margin-bottom: 1.5rem;
    }
    .btn {
      display: inline-block;
      padding: 0.7rem 1.5rem;
      background-color: #D4AF37;
      color: white;
      border-radius: 25px;
      text-decoration: none;
      transition: background 0.3s;
    }
    .btn:hover {
      background-color: #b38e25;
    }

    /* === FOOTER === */
    footer {
      background: #1a252f;
      color: #ddd;
      text-align: center;
      padding: 2rem 0;
      margin-top: 3rem;
    }
    footer a {
      color: #D4AF37;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">THE KICUKIRO HEIGHTS</div>
    <div class="nav-links">
      <a href="/welcome">Home</a>
      <a href="/services">Services</a>
      <a href="/facilities">Facilities</a>
      <a href="/book">Book Now</a>
      <a href="/register">Register</a>
    </div>
  </header>

  <section class="hero">
    <h1>Our Signature Services</h1>
  </section>

  <section class="services">
    <!-- Fine Dining -->
    <div class="service-card">
      <img src="/dining/restaurant 4.avif" alt="Fine Dining">
      <div class="service-content">
        <h3>Fine Dining – Imbuto Fusion</h3>
        <p>Experience world-class gastronomy with a panoramic view of Kigali. Perfect for elegant dinners and culinary excellence.</p>
        <a href="/finedining" class="btn">Learn More</a>
      </div>
    </div>

    <!-- Rooftop Bar -->
    <div class="service-card">
      <img src="/rooftop bar/rooftop 4.jpg" alt="Rooftop Bar">
      <div class="service-content">
        <h3>Rooftop Bar – SkyKigali</h3>
        <p>Enjoy Kigali’s skyline with signature cocktails, smooth music, and sunset views from the 11th floor terrace.</p>
        <a href="/rooftop" class="btn">Learn More</a>
      </div>
    </div>

    <!-- Coffee Lounge -->
    <div class="service-card">
      <img src="/coffee/coffee 3.avif" alt="Coffee Lounge">
      <div class="service-content">
        <h3>Coffee Lounge – Rwagasabo Café</h3>
        <p>Relax with Rwanda’s finest coffee, pastries, and calm ambiance — perfect for a quiet morning or informal meet-up.</p>
        <a href="/coffeelounge" class="btn">Learn More</a>
      </div>
    </div>

    <!-- Business Lounge -->
    <div class="service-card">
      <img src="/business/business 4.avif" alt="Business Lounge">
      <div class="service-content">
        <h3>Business Lounge – The Executive Hub</h3>
        <p>Host your meetings or work remotely in style with high-speed Wi-Fi, private spaces, and top-tier office amenities.</p>
        <a href="/businesslounge" class="btn">Learn More</a>
      </div>
    </div>

    <!-- Luxury Shuttle -->
    <div class="service-card">
      <img src="/luxury/luxury 4.jpg" alt="Luxury Shuttle">
      <div class="service-content">
        <h3>Luxury Shuttle – Kigali Transfers</h3>
        <p>Travel in comfort and class. From airport pickups to city tours, our luxury shuttles redefine convenience and elegance.</p>
        <a href="/luxuryshuttle" class="btn">Learn More</a>
      </div>
    </div>

    <!-- Digital Concierge -->
    <div class="service-card">
      <img src="https://images.unsplash.com/photo-1556742044-3c52d6e88c62?auto=format&fit=crop&w=800&q=80" alt="Digital Concierge">
      <div class="service-content">
        <h3>Digital Concierge – 24/7 Assistance</h3>
        <p>From room service to reservations, get instant help through our digital concierge. Your comfort is just a tap away.</p>
        <a href="/digitalconcierge" class="btn">Learn More</a>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/welcome">Back to Home</a></p>
  </footer>
</body>
</html>
