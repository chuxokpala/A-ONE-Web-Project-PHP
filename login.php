<?php include('includes/header.php'); ?>
<?php require('config/db.php'); ?>
<?php session_start(); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"]);
  $password = $_POST["password"];

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user["password"])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_name"] = $user["name"];
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Invalid email or password.";
  }
}
?>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-lg animate__animated animate__fadeIn">
      <div class="card-header bg-success text-white text-center">
        <h4 class="mb-0">Login to Your Account</h4>
      </div>
      <div class="card-body">
        <?php if (isset($_GET['registered'])): ?>
          <div class="alert alert-success animate__animated animate__fadeInDown">
            Registration successful. Please login.
          </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
          <div class="alert alert-danger animate__animated animate__fadeInDown">
            <?= $error ?>
          </div>
        <?php endif; ?>

        <form method="post" novalidate>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success btn-lg">Login</button>
          </div>
        </form>
      </div>
      <div class="card-footer text-center">
        <small>Don't have an account? <a href="register.php">Register here</a></small>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
