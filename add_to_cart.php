<?php
session_start();

$productId = $_POST['product_id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Avoid duplicates
if (!in_array($productId, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $productId;
}

header('Location: shop.php');
exit;
