<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include('includes/header.php');
require_once 'config/db.php';

$user_id = $_SESSION['user_id'];

// Retrieve purchase history
$stmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ?");
$stmt->execute([$user_id]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Navigation -->
        <nav class="col-md-3 bg-dark text-white sidebar p-4">
            <h4 class="mb-3">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-house-door"></i> <span class="ms-2">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-cart"></i> <span class="ms-2">Saved Cart</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.php#purchase-history" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-receipt"></i> <span class="ms-2">Purchase History</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white d-flex align-items-center dropdown-toggle" id="settingsDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i> <span class="ms-2">Account Settings</span>
                    </a>
                    <ul class="dropdown-menu bg-dark text-white border-0">
                        <li><a class="dropdown-item text-white" href="profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item text-white" href="addresses.php">Manage Addresses</a></li>
                        <li><a class="dropdown-item text-white" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="col-md-9 p-4">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?> 👋</h2>
            <p class="text-muted">Here’s a quick look at your shopping activity.</p>


            <!-- Order Notifications -->
            <?php
            $notifyStmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ? AND status != 'Delivered' ORDER BY created_at DESC LIMIT 1");
            $notifyStmt->execute([$user_id]);
            $latestOrder = $notifyStmt->fetch(PDO::FETCH_ASSOC);
            ?>

            <?php if ($latestOrder): ?>
                <div class="alert alert-info">
                    <strong>Update on Order #<?php echo $latestOrder['id']; ?>:</strong>
                    Your order is now <span class="badge bg-<?php echo ($latestOrder['status'] == 'Shipped') ? 'warning' : 'secondary'; ?>">
                        <?php echo htmlspecialchars($latestOrder['status']); ?>
                    </span>
                    <?php if ($latestOrder['tracking_code']): ?>
                        <a href="dashboard.php?track=<?php echo htmlspecialchars($latestOrder['tracking_code']); ?>" class="btn btn-sm btn-primary ms-2">Track Order</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Purchase History -->
            <div class="card shadow-sm p-3 mt-4" id="purchase-history">
                <h4>📜 Purchase History</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Tracking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td>#<?php echo $order['id']; ?></td>
                            <td><?php echo date("d M Y", strtotime($order['created_at'])); ?></td>
                            <td><?php echo htmlspecialchars($order['items']); ?></td>
                            <td>₦<?php echo number_format($order['total_price'], 2); ?></td>
                            <td>
                                <span class="badge bg-<?php echo ($order['status'] == 'Delivered') ? 'success' : (($order['status'] == 'Shipped') ? 'warning' : 'secondary'); ?>">
                                    <?php echo htmlspecialchars($order['status']); ?>
                                </span>
                            </td>
                            <td>
                                <?php if ($order['tracking_code']): ?>
                                    <a href="dashboard.php?track=<?php echo htmlspecialchars($order['tracking_code']); ?>" class="btn btn-info btn-sm">Track Order</a>
                                <?php else: ?>
                                    <span class="text-muted">Not Available</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Order Tracking Panel -->
            <?php if (isset($_GET['track'])): ?>
                <?php
                $tracking_code = $_GET['track'];
                $stmt = $pdo->prepare("SELECT * FROM orders WHERE tracking_code = ?");
                $stmt->execute([$tracking_code]);
                $order = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <?php if ($order): ?>
                <div class="mt-4 p-4 border rounded bg-light">
                    <h4>Tracking Order #<?php echo $order['id']; ?></h4>
                    <p><strong>Current Status:</strong> 
                        <span class="badge bg-<?php echo ($order['status'] == 'Delivered') ? 'success' : (($order['status'] == 'Shipped') ? 'warning' : 'secondary'); ?>">
                            <?php echo htmlspecialchars($order['status']); ?>
                        </span>
                    </p>
                    <p><strong>Estimated Delivery:</strong> <?php echo $order['estimated_delivery'] ? date("d M Y", strtotime($order['estimated_delivery'])) : 'Not Available'; ?></p>
                    <p><strong>Tracking Code:</strong> <?php echo htmlspecialchars($tracking_code); ?></p>
                </div>
                <?php else: ?>
                <div class="mt-4 alert alert-danger">Tracking code not found.</div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Saved Cart Items -->
            <div class="card shadow-sm p-3 mt-4">
                <h4>🛒 Your Saved Cart</h4>
                <p class="text-muted">View and manage items you've added to your cart.</p>
                <a href="cart.php" class="btn btn-primary">Go to Cart</a>
            </div>

            <!-- Shipping & Checkout Info -->
            <div class="card shadow-sm p-3 mt-4">
                <h4>🚚 Shipping Addresses</h4>
                <p class="text-muted">Manage your delivery locations for seamless checkouts.</p>
                <a href="profile.php" class="btn btn-secondary">Edit Addresses</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<script>
function checkOrderUpdates() {
    fetch('check_status.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('order-notifications').innerHTML = data;
        });
}

// Refresh every 30 seconds
setInterval(checkOrderUpdates, 30000);
</script>
