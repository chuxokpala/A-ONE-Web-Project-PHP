<?php
session_start();
require_once 'config/db.php'; // This sets $pdo

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);

  // Basic Validation
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    $_SESSION['error'] = "All fields are required.";
    header("Location: contact.php");
    exit();
  }

  try {
    $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
    $stmt->execute([
      ':name'    => $name,
      ':email'   => $email,
      ':subject' => $subject,
      ':message' => $message
    ]);

    $_SESSION['success'] = "Your message has been sent successfully!";
  } catch (PDOException $e) {
    $_SESSION['error'] = "Failed to send message: " . $e->getMessage();
  }

  header("Location: contact.php");
  exit();
} else {
  $_SESSION['error'] = "Invalid request.";
  header("Location: contact.php");
  exit();
}
