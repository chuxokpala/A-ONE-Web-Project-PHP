<?php
session_start();
include('includes/header.php');
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Basic validation
    if (empty($fullname) || empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: register.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: register.php");
        exit;
    }

    // Check if email exists
    $stmt = $pdo->prepare("SELECT id FROM aone_users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['error'] = "Email is already in use.";
        header("Location: register.php");
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into database
    $insertStmt = $pdo->prepare("INSERT INTO aone_users (fullname, email, password) VALUES (?, ?, ?)");
    if ($insertStmt->execute([$fullname, $email, $hashedPassword])) {
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['fullname'] = $fullname;
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['error'] = "Registration failed. Please try again.";
        header("Location: register.php");
        exit;
    }
}
?>


<div class="container my-5">
    <h2 class="text-center">Create Your Account</h2>
    <p class="text-center text-muted">Sign up now to enjoy exclusive shopping perks!</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <button type="submit" name="register" class="btn btn-primary w-100">Sign Up</button>
                </div>
            </form>
            
            <p class="text-center text-muted">
                Already have an account? <a href="login.php" class="text-primary">Log in</a>
            </p>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>


