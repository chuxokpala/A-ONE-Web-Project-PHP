<?php
session_start();

// Decode the cart JSON sent from frontend
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['cart'])) {
    $_SESSION['cart'] = $data['cart'];
    echo json_encode(['status' => 'success', 'message' => 'Cart updated']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid cart data']);
}
?>