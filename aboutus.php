<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - Pizza House</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
    }

    .about-section {
      padding: 100px 0;
      background-color: #fff5f5;
    }

    .about-title {
      color: #d62828;
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .about-text {
      font-size: 1.15rem;
      line-height: 1.8;
      color: #444;
    }

    .about-img {
      border-radius: 12px;
      width: 100%;
      max-width: 100%;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .highlight {
      color: #d62828;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php include "nev.php"?>
<!-- ✅ ABOUT US SECTION -->
<section class="about-section" id="about">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://source.unsplash.com/700x500/?pizza,kitchen" alt="Pizza House Kitchen" class="about-img">
      </div>

      <!-- Text -->
      <div class="col-lg-6">
        <h2 class="about-title">Our Story</h2>
        <p class="about-text">
          <span class="highlight">Pizza House</span> began with a dream – to bring authentic, delicious, and handcrafted pizzas to every table. Founded in a small corner kitchen, our journey started with a single oven and a lot of passion.
        </p>
        <p class="about-text">
          Today, we're proud to be known for our <span class="highlight">fresh ingredients</span>, <span class="highlight">innovative flavors</span>, and <span class="highlight">unmatched service</span>. From our famous Margherita to the bold Spicy Chicken Supreme, each pizza is a celebration of flavor.
        </p>
        <p class="about-text">
          We source our ingredients locally, support farmers, and bake every crust to golden perfection. Whether you're ordering online or visiting us in-store, we promise a warm, welcoming experience every time.
        </p>
        <p class="about-text">
          Our mission is simple: <span class="highlight">To make every pizza moment unforgettable</span>. Thank you for being part of the Pizza House family.
        </p>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
