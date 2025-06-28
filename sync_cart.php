<?php
session_start();
header('Content-Type: application/json');

require_once 'config/db.php';  // Your DB connection (if needed)

$user_id = $_SESSION['user_id'] ?? null;
$session_cart = $_SESSION['cart'] ?? [];

// Read incoming JSON cart from client (localStorage cart)
$input = json_decode(file_get_contents("php://input"), true);
$client_cart = $input['cart'] ?? [];

function merge_carts($server_cart, $client_cart) {
    $merged = [];

    foreach ($server_cart as $item) {
        $merged[$item['id']] = $item;
    }

    foreach ($client_cart as $item) {
        if (isset($merged[$item['id']])) {
            // Prevent quantity duplication by keeping the max quantity instead of summing
            $merged[$item['id']]['quantity'] = max($merged[$item['id']]['quantity'] ?? 1, $item['quantity'] ?? 1);
        } else {
            $merged[$item['id']] = $item;
        }
    }

    return array_values($merged);
}


// new
if ($user_id) {
    // Update session cart based only on localCart instead of merging old data
    $_SESSION['cart'] = $client_cart;
    echo json_encode(['cart' => $_SESSION['cart']]);
} else {
    // Guest users only rely on localStorage
    echo json_encode(['cart' => $client_cart]);
}


exit;
?>
