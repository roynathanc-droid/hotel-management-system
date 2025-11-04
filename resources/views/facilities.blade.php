<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facilities | The Kicukiro Heights</title>
  <style>
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
    .hero {
      height: 60vh;
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1400&q=80') no-repeat center/cover;
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
    .facilities {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      width: 90%;
      max-width: 1100px;
      margin: 3rem auto;
    }
    .facility-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .facility-card:hover {
      transform: translateY(-5px);
    }
    .facility-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }
    .facility-content {
      padding: 1.5rem;
      text-align: center;
    }
    .facility-content h3 {
      color: #2C3E50;
      margin-bottom: 0.5rem;
    }
    .facility-content p {
      color: #555;
      font-size: 0.95rem;
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
      <a href="/clients">Home</a>
      <a href="/services">Services</a>
      <a href="/facilities">Facilities</a>
      <a href="/book">Book Now</a>
      <a href="/register">Register</a>
    </div>
  </header>

  <section class="hero">
    <h1>Our World-Class Facilities</h1>
  </section>

  <section class="facilities">
    <div class="facility-card">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Infinity Pool">
      <div class="facility-content">
        <h3>Infinity Pool</h3>
        <p>Swim above the city — our heated infinity pool offers panoramic views and pure relaxation.</p>
        <a href="/infinitypool" class="btn">Learn More</a>
      </div>
    </div>

    <div class="facility-card">
      <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=1350&q=80" alt="Spa & Wellness">
      <div class="facility-content">
        <h3>Spa & Wellness</h3>
        <p>Experience holistic rejuvenation with massages, aromatherapy, and sauna treatments.</p>
        <a href="/spa" class="btn">Learn More</a>
      </div>
    </div>

    <div class="facility-card">
      <img src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1?auto=format&fit=crop&w=800&q=80" alt="Fitness Center">
      <div class="facility-content">
        <h3>Fitness Center</h3>
        <p>Train in our modern fitness studio equipped with state-of-the-art machines and personal trainers.</p>
        <a href="/fitness" class="btn">Learn More</a>
      </div>
    </div>

    <div class="facility-card">
      <img src="https://www.miamiparking.com/wp-content/uploads/2023/11/Garage-1.webp" alt="Valet Parking">
      <div class="facility-content">
        <h3>Valet Parking</h3>
        <p>Arrive stress-free with our 24/7 valet service — convenience and class combined.</p>
        <a href="/valet" class="btn">Learn More</a>
      </div>
    </div>

    <div class="facility-card">
      <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1400&q=80" alt="High-Speed Wi-Fi">
      <div class="facility-content">
        <h3>High-Speed Wi-Fi</h3>
        <p>Stay connected everywhere with our lightning-fast fiber internet, perfect for work or streaming.</p>
        <a href="wifi" class="btn">Learn More</a>
      </div>
    </div>

    <div class="facility-card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Archive_MAMCO_African_artist_exibition_n._3767.jpg" alt="Art Gallery">
      <div class="facility-content">
        <h3>Art Gallery</h3>
        <p>Immerse yourself in local and international art — a rotating collection of Kigali’s creative spirit.</p>
        <a href="/artgallery" class="btn">Learn More</a>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/welcome">Back to Home</a></p>
  </footer>
</body>
</html>
