<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Shuttle | Elite Transfers - The Kicukiro Heights</title>
  <style>
    body{margin:0;font-family:'Arial',sans-serif;background:#f9f9f9;color:#333;}
    header{background:#2C3E50;color:white;padding:1rem 2rem;display:flex;justify-content:space-between;align-items:center;}
    .logo{font-size:1.8rem;font-weight:bold;color:#D4AF37;}
    .nav-links a{color:white;margin-left:1.5rem;text-decoration:none;transition:color 0.3s;}
    .nav-links a:hover{color:#D4AF37;}
    .hero{height:60vh;background:url('/luxury/luxury 4.jpg') no-repeat center/cover;display:flex;justify-content:center;align-items:center;color:white;text-align:center;text-shadow:2px 2px 5px rgba(0,0,0,0.6);}
    .hero h1{font-size:3rem;}
    .container{width:90%;max-width:1000px;margin:3rem auto;}
    .intro{text-align:center;margin-bottom:2rem;}
    .intro p{color:#555;max-width:700px;margin:0 auto;line-height:1.6;}
    .gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.5rem;}
    .gallery img{width:100%;border-radius:8px;box-shadow:0 5px 15px rgba(0,0,0,0.1);}
    footer{background:#1a252f;color:#ddd;text-align:center;padding:2rem 0;margin-top:3rem;}
    footer a{color:#D4AF37;text-decoration:none;}
  </style>
</head>
<body>
  <header>
    <div class="logo">THE KICUKIRO HEIGHTS</div>
    <div class="nav-links">
      <a href="/">Home</a>
      <a href="/services">Services</a>
      <a href="/facilities">Facilities</a>
      <a href="/book">Book Now</a>
      <a href="/register">Register</a>
    </div>
  </header>

  <section class="hero">
    <h1>Elite Luxury Shuttle</h1>
  </section>

  <div class="container">
    <div class="intro">
      <h2>Travel in Style & Comfort</h2>
      <p>Our <strong>Luxury Shuttle Service</strong> provides seamless and elegant transfers across Kigali and beyond.  
      Choose between Tesla, Range Rover, or Mercedes-Benz — designed for comfort, privacy, and sophistication.  
      Whether airport pickup or private city tour, we redefine premium mobility.</p>
    </div>

    <div class="gallery">
      <img src="/luxury/luxury 1.jpg" alt="Luxury Car Exterior">
      <img src="/luxury/luxury 2.jpg" alt="Tesla Interior">
      <img src="/luxury/luxury 3.jpg" alt="Range Rover Ride">
    </div>
  </div>

  <footer>
    <p>&copy; {{ date ('Y') }} The Kicukiro Heights | <a href="/">Back to Home</a></p>
  </footer>
</body>
</html>
