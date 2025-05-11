<?php
session_start();
include('includes/header.php');
include('products.php');


// Build cart
$cartItems = [];
$total = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id) {
        if (isset($products[$id])) {
            $cartItems[] = $products[$id];
            $total += $products[$id]['price'];
        }
    }
}
?>

<div class="container py-5">
  <h2 class="mb-4" data-aos="fade-down">Your Cart</h2>

  <?php if ($cartItems): ?>
    <div class="row">
      <?php foreach ($cartItems as $index => $item): ?>
        <div class="col-md-6 mb-4" data-aos="fade-up">
          <div class="card h-100 shadow-sm">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?= $item['image'] ?>" class="img-fluid rounded-start" alt="<?= $item['name'] ?>">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $item['name'] ?></h5>
                  <p class="card-text">Price: $<?= number_format($item['price'], 2) ?></p>
                  <form action="remove_from_cart.php" method="POST">
                    <!-- <input type="hidden" name="item_index" value="<?= $index ?>"> -->
                    <input type="hidden" name="product_id" value="<?= array_search($item, $products) ?>">

                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    
    <div class="text-end mt-4">
      <h4>Total: $<?= number_format($total, 2) ?></h4>
      <a href="checkout.php" class="btn btn-success mt-2">Proceed to Checkout</a>
      <a href="dashboard.php" class="btn btn-success mt-2">Go back to dashboard</a>
    </div>
  <?php else: ?>
    <p>Your cart is empty.</p>
  <?php endif; ?>
</div>



<?php include('includes/footer.php'); ?>
