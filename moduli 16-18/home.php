<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>E.M - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    /* Navbar brand */
    .logo {
      font-weight: 600;
      letter-spacing: 2px;
      color: #0d6efd;
      font-size: 22px;
    }

    /* Hero section */
    .hero {
      height: 90vh;
      display: flex;
      align-items: center;
    }

    .hero h1 {
      font-size: 48px;
      font-weight: 600;
    }

    .hero p {
      color: #6c757d;
      margin: 20px 0;
    }

    .hero-img {
      width: 100%;
      border-radius: 15px;
    }

    /* Features */
    .feature-box {
      padding: 25px;
      border-radius: 15px;
      background: #fff;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .feature-box:hover {
      transform: translateY(-5px);
    }
  </style>
</head>

<body>

<!-- 🔷 Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand logo" href="#">E.M</a>

    <div class="ms-auto">
      <a href="home.php" class="btn btn-outline-primary me-2">Home</a>
      <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
      <a href="index.php" class="btn btn-primary">Register</a>
    </div>
  </div>
</nav>

<!-- 🔥 Hero Section -->
<div class="container hero">
  <div class="row align-items-center">
    
    <!-- Left -->
    <div class="col-md-6">
      <h1>Welcome to E.M</h1>
      <p>A simple and modern platform to manage your account and get started</p>
      
      <a href="register.php" class="btn btn-primary btn-lg me-2">Get Started</a>
      <a href="login.php" class="btn btn-outline-secondary btn-lg">Login</a>
    </div>

    <!-- Right -->
    <div class="col-md-6 text-center">
      <img src="images/logo.png" class="logo-img">
   <img src="image/logo.png" width="200" style="border: 2px solid red;">
  </div>


<!-- ⭐ Features -->
<div class="container mb-5">
  <div class="row text-center">

    <div class="col-md-4">
      <div class="feature-box">
        <h5>🔒 Secure</h5>
        <p>Your data is protected and handled safely.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="feature-box">
        <h5>⚡ Fast</h5>
        <p>Optimized for speed and performance.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="feature-box">
        <h5>🎨 Modern</h5>
        <p>Clean and user-friendly interface.</p>
      </div>
    </div>

  </div>
</div>

<!-- 🔻 Footer -->
<footer class="text-center py-3 bg-white shadow-sm">
  <p class="mb-0">© 2026 E.M - All rights reserved</p>
</footer>

</body>
</html>