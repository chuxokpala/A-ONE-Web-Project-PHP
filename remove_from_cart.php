<?php
session_start();

if (isset($_POST['item_index'])) {
    unset($_SESSION['cart'][$_POST['item_index']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

header('Location: cart.php');
exit;
