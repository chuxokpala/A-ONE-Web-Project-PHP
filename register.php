<?php include('includes/header.php'); ?>
<?php require('config/db.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];

  $errors = [];

  if (empty($name) || empty($email) || empty($password)) {
    $errors[] = "All fields are required.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }

  if ($password !== $confirm) {
    $errors[] = "Passwords do not match.";
  }

  if (empty($errors)) {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
      $errors[] = "Email is already registered.";
    } else {
      $hashed = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
      if ($stmt->execute([$name, $email, $hashed])) {
        header("Location: login.php?registered=1");
        exit;
      } else {
        $errors[] = "Registration failed. Try again.";
      }
    }
  }
}
?>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-lg animate__animated animate__fadeIn">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Create Your Account</h4>
      </div>
      <div class="card-body">
        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger animate__animated animate__fadeInDown">
            <?php foreach ($errors as $e) echo "<p class='mb-1'>$e</p>"; ?>
          </div>
        <?php endif; ?>

        <form method="post" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="confirm" class="form-label">Confirm Password</label>
            <input type="password" name="confirm" class="form-control" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
          </div>
        </form>
      </div>
      <div class="card-footer text-center">
        <small>Already have an account? <a href="login.php">Login here</a></small>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
