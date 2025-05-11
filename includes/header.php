<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>A-ONE Electric & Solar LTD</title>
  <link href="css/index.css" rel="stylesheet"/>
  <link href="css/aboutus.css" rel="stylesheet"/>
  <link href="css/services.css" rel="stylesheet"/>
  <link href="css/contact.css" rel="stylesheet"/>
  <link href="./assets/css/style.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


  <!-- Additional CSS for the navbar line -->
  <style>
    .navbar {
      border-bottom: 2px solid lightgrey; /* Light grey line under navbar */
    }

    .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px; /* Reduce if needed */
}

.footer-links {
    margin-left: 30px; /* Slight right shift */
    flex: 1;
    max-width: 180px; /* Restrict width to control layout */
}

.footer-contact {
    flex: 1;
    max-width: 220px;
    margin-left: 10px; /* Pull closer to links */
}

/* Social Icons: refined size */
.footer-socials img {
    width: 20px;
    height: 20px;
    margin: 0 4px;
}
}


  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand ms-0" href="index.php">
        <img class="aone" src="assets/web images/AESL Logo_PNG x1.png" alt="Aone web-logo" style="width: 170px; height: 30px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link btn btn-primary text-white px-3" href="quote.php">Request a Quote</a></li>

          <li class="nav-item"><a class="nav-link text-black" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="shop.php">Store</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="contact.php">Contact</a></li>
          <li class="nav-item">
                <?php if (isset($_SESSION['user_id'])): ?>
                <a class="nav-link" href="logout.php">Logout</a>
                <?php endif; ?>
          </li>
            <!-- Request a Quote Button -->
            <li class="nav-item ms-2">
    <a href="quote.php" class="btn btn-primary text-white">Request a Quote</a>
  </li>
  
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>