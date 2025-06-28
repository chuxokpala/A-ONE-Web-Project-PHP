<?php
session_start();
require_once 'config/db.php';

$user_id = $_SESSION['user_id'];
$notifyStmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ? AND status != 'Delivered' ORDER BY created_at DESC LIMIT 1");
$notifyStmt->execute([$user_id]);
$latestOrder = $notifyStmt->fetch(PDO::FETCH_ASSOC);

if ($latestOrder) {
    echo '<div class="alert alert-info" id="order-notifications">';
    echo '<strong>Update on Order #'.$latestOrder['id'].':</strong> ';
    echo 'Your order is now <span class="badge bg-'.($latestOrder['status'] == 'Shipped' ? 'warning' : 'secondary').'">';
    echo htmlspecialchars($latestOrder['status']).'</span>';

    if ($latestOrder['tracking_code']) {
        echo '<a href="dashboard.php?track='.htmlspecialchars($latestOrder['tracking_code']).'" class="btn btn-sm btn-primary ms-2">Track Order</a>';
    }
    echo '</div>';
}
?>
