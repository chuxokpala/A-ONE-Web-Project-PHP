<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
$userName = $_SESSION['user_name'];
?>

<?php include('includes/header.php'); ?>

<style>
  body {
    background-color: #f8f9fa;
  }

  .sidebar {
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
    width: 250px;
    background-color: #343a40;
    color: white;
    padding-top: 60px;
    transition: all 0.3s ease;
  }

  .sidebar a {
    color: #ffffff;
    text-decoration: none;
    padding: 15px;
    display: block;
    transition: 0.3s;
  }

  .sidebar a:hover {
    background-color: #495057;
  }

  .main-content {
    margin-left: 250px;
    padding: 2rem;
  }

  @media (max-width: 768px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }

    .main-content {
      margin-left: 0;
    }
  }
</style>

<form action="add_to_cart.php" method="POST">
  <input type="hidden" name="product_id" value="<?= $id ?>">
  <button type="submit" class="btn btn-primary">Add to Cart</button>
</form>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aone Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarHeader">
      <ul class="navbar-nav">
        <li class="nav-item">
          <button class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#settingsModal">Settings</button>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Sidebar -->
<div class="sidebar d-none d-md-block">
  <a href="#">🏠 Dashboard</a>
  <a href="profile.php">👤 Profile</a>
  <a href="cart.php">🛒 My Cart</a>
  <a href="shop.php">🛍️ Shop</a>
  <a href="checkout.php">💳 Checkout</a>
  <a href="contact.php">📞 Contact Us</a>
</div>

<!-- Main Content -->
<div class="main-content">
  <div class="container-fluid">
    <div class="alert alert-success animate__animated animate__fadeIn">
      <h4 class="mb-0">Welcome, <?= htmlspecialchars($userName) ?> 👋</h4>
      <p class="mb-1">You're successfully logged in.</p>
    </div>

    <!-- Example dashboard card -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card border-primary shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Cart</h5>
            <p class="card-text">View items in your cart.</p>
            <a href="cart.php" class="btn btn-primary">Go to Cart</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-success shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Shop</h5>
            <p class="card-text">Browse our latest products.</p>
            <a href="shop.php" class="btn btn-success">Visit Shop</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-info shadow">
          <div class="card-body text-center">
            <h5 class="card-title">Profile</h5>
            <p class="card-text">Update your information.</p>
            <a href="profile.php" class="btn btn-info">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="settingsModalLabel">⚙️ Settings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Here you can manage settings like theme, notification preferences, and more (to be implemented).</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-4 bg-light mt-5">
  <p class="mb-0 text-muted">© <?= date("Y") ?> Aone Company. All rights reserved.</p>
</footer>

<?php include('includes/footer.php'); ?>
