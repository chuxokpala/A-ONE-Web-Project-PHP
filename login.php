<?php
session_start();
include('includes/header.php');
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required.";
        header("Location: login.php");
        exit;
    }

    // Retrieve user details
    $stmt = $pdo->prepare("SELECT id, fullname, password FROM aone_users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {
        $_SESSION['error'] = "Invalid credentials.";
        header("Location: login.php");
        exit;
    }

    // Successful login, create session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['fullname'] = $user['fullname'];
    header("Location: dashboard.php");
    exit;
}
?>


<div class="container my-5">
    <h2 class="text-center">Sign In to Your Account</h2>
    <p class="text-center text-muted">Access your shopping history and saved cart items.</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
            
            <p class="text-center text-muted">
                Don't have an account? <a href="register.php" class="text-primary">Sign up</a>
            </p>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
