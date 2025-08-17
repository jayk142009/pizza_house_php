<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pizza House</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet" />

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Rubik', sans-serif;
      margin: 0;
      background: #fff;
    }

    .navbar {
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      padding: 1rem 0;
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 700;
      color: #e03131 !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand i {
      color: #ff6b00;
      margin-right: 8px;
    }

    .nav-link {
      font-size: 1rem;
      color: #333 !important;
      font-weight: 500;
      margin-right: 1.2rem;
      position: relative;
    }

    .nav-link::after {
      content: '';
      display: block;
      width: 0%;
      height: 2px;
      background: #e03131;
      transition: width 0.3s;
      position: absolute;
      bottom: -4px;
      left: 0;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .btn-order {
      background: linear-gradient(45deg, #ff6b00, #e03131);
      color: white;
      font-weight: 600;
      border: none;
      padding: 10px 25px;
      border-radius: 50px;
      transition: 0.3s ease-in-out;
      text-decoration: none;
    }

    .btn-order:hover {
      background: linear-gradient(45deg, #e03131, #ff6b00);
    }

    @media (max-width: 991px) {
      .btn-order {
        width: 100%;
        margin-top: 10px;
      }
    }

    /* Ensure the toggler icon is visible */
    .navbar-toggler {
      border: none;
      font-size: 1.25rem;
      color: #333;
    }
    .navbar-toggler:focus {
      outline: none;
      box-shadow: none;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-pizza-slice"></i>Pizza House
      </a>

      <!-- Custom Hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
              aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <a href="menu.php" class="btn btn-order ms-lg-3 mt-2 mt-lg-0">Order Now</a>
      </div>
    </div>
  </nav>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Auto-close mobile menu when clicking outside -->
  <script>
    document.addEventListener('click', function (e) {
      const nav = document.querySelector('.navbar');
      const collapseEl = document.getElementById('navbarContent');
      const isOpen = collapseEl.classList.contains('show');
      if (isOpen && !nav.contains(e.target)) {
        const bs = bootstrap.Collapse.getInstance(collapseEl);
        if (bs) bs.hide();
      }
    });
  </script>
</body>
</html>
