<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Houce</title>
    <link rel="stylesheet" href="style.css">
    <style>
      *{
        
      }
    </style>
</head>
<body>
    <?php include "nev.php"?>
    <!-- ✅ HERO SECTION START -->
<section class="hero-section d-flex align-items-center" id="home">
  <div class="container text-center text-lg-start">
    <div class="row align-items-center">
      <!-- LEFT TEXT -->
      <div class="col-lg-6">
        <h1 class="display-4 fw-bold text-white mb-3">
          Delicious Pizza <br><span class="highlight">Delivered Fast</span>
        </h1>
        <p class="lead text-white-50 mb-4">
          Get hot and fresh pizza delivered at your door within minutes. Made with love and loaded with flavor!
        </p>
        <a href="menu.php" class="btn btn-order px-4 py-2">Order Now</a>
        <a href="menu.php" class="btn btn-order px-4 py-2">View Menu</a>
      </div>
    </div>
  </div>
</section>
<!-- ✅ HERO SECTION END -->
 <!-- FEATURES SECTION -->
<section id="features" class="features-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold section-title">Why Choose Us</h2>
      <p class="text-muted">Experience pizza the way it should be—fast, fresh, and unforgettable.</p>
    </div>
    <div class="row g-4">
      <!-- Fast Delivery -->
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="fas fa-bolt"></i>
          </div>
          <h5 class="fw-semibold">Super Fast Delivery</h5>
          <p class="text-muted small">Hot pizza at your door in minutes, never cold.</p>
        </div>
      </div>

      <!-- Fresh Ingredients -->
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="fas fa-leaf"></i>
          </div>
          <h5 class="fw-semibold">Fresh Ingredients</h5>
          <p class="text-muted small">Made with farm-fresh veggies & premium cheese every time.</p>
        </div>
      </div>

      <!-- Top Rated Taste -->
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="fas fa-star"></i>
          </div>
          <h5 class="fw-semibold">Top Rated Taste</h5>
          <p class="text-muted small">Loved by thousands—each bite crafted for flavor.</p>
        </div>
      </div>

      <!-- Easy Ordering -->
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h5 class="fw-semibold">Easy Ordering</h5>
          <p class="text-muted small">Order in seconds from any device with our seamless interface.</p>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>