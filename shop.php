<?php
session_start();
include('includes/header.php');
include('products.php');
?>

<!-- Flex container (just below the header) -->
<div style="
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px 120px;
    background: blue;
    border-bottom: 1px solid #dee2e6;
">
  <!-- Cart button -->
  <a href="cart.php" style="text-decoration: none;">
    <div id="cartCounter" style="
        background: white;
        color: blue;
        padding: 5px 10px;
        border-radius: 2px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 600;
    ">
        🛒 <span id="cartCount">
            <?php
            // Count total quantity safely from session cart
            if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart']) || empty($_SESSION['cart'])) {
                echo 0;
            } else {
                $totalQuantity = 0;
                foreach ($_SESSION['cart'] as $product) {
                    if (isset($product['quantity']) && is_numeric($product['quantity'])) {
                        $totalQuantity += (int)$product['quantity'];
                    } else {
                        $totalQuantity += 1; // fallback quantity
                    }
                }
                echo $totalQuantity;
            }
            ?>
        </span>
    </div>
  </a>
</div>

<!-- Products Section -->
<div class="container my-5">
    <?php if (!isset($_SESSION['user_id'])): ?>
        <div class="alert alert-info text-center">
            <h5>🚀 Unlock Exclusive Shopping Perks!</h5>
            <p>Enjoy faster checkouts, order tracking, and exclusive member-only deals when you sign up.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="register.php" class="btn btn-primary">Sign Up Free</a>
                <a href="login.php" class="btn btn-outline-primary">Already have an account? Log in</a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Category Filter -->
    <div class="mb-4 d-flex justify-content-end">
        <select id="categoryFilter" class="form-select w-auto">
            <option value="All">All Categories</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo htmlspecialchars($category); ?>"><?php echo htmlspecialchars($category); ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Product Listings -->
    <div id="productsGrid" class="row g-4">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 product-card" data-category="<?php echo htmlspecialchars($product['category']); ?>">
            <div class="card h-100 text-center">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>" style="height: 200px; width: 200px; object-fit: contain; display:block; margin-right: auto; margin-left: auto;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                    <p class="fw-bold text-dark">₦<?php echo number_format($product['price'], 2); ?></p>


                    
                    <?php
                    $rating = $product['rating'] ?? null;
                    $ratingText = ($rating && isset($rating['stars'], $rating['count'])) 
                        ? "<span style='color: #FFA500;'>⭐</span> {$rating['stars']} ({$rating['count']} reviews)"
                        : "No rating available";
                    ?>
                    <p><?php echo $ratingText; ?></p>

                    <div class="mt-auto d-flex gap-2 justify-content-center">
                        <button class="btn btn-primary view-details-btn" data-bs-toggle="modal" data-bs-target="#productModal" data-product='<?php echo htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8'); ?>'>
                            View Details
                        </button>
                        <button class="btn btn-success add-to-cart-btn" data-product='<?php echo htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8'); ?>'>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Product Details Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-4">
          <img id="modalProductImage" src="" alt="Product Image" style="width: 200px; height: 200px; object-fit: contain;">
        </div>
        <table class="table table-striped">
          <tbody id="productDetailsTable"></tbody>
        </table>
        <div class="pdf-viewer mt-4" id="productPdfViewer" style="display: none;">
          <h6>Product Brochure</h6>
          <iframe id="pdfFrame" src="" width="100%" height="400px" style="border: 1px solid #ccc;"></iframe>
        </div>
      </div>
      <div class="modal-footer d-flex gap-3 justify-content-center">
        <button id="addToCartBtn" class="btn" style="background-color: #d35400; color: white;">
          Add to Cart
        </button>
        <a id="whatsappBtn" class="btn btn-success" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Toast Message -->
<div id="toast" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
  <div id="toastMessage" class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">Product added to cart!</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<!-- JavaScript Enhancements -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cartCount = document.getElementById('cartCount');
    const addToCartModalBtn = document.getElementById('addToCartBtn');
    const toastElement = document.getElementById('toastMessage');
    const toast = new bootstrap.Toast(toastElement);
    let selectedProduct = null;

    function showToast(message) {
        toastElement.querySelector('.toast-body').textContent = message;
        toast.show();
    }

    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const totalQuantity = cart.reduce((sum, item) => {
            const qty = parseInt(item.quantity);
            return sum + (isNaN(qty) ? 1 : qty);
        }, 0);

        if (cartCount) {
            cartCount.textContent = totalQuantity;
        }
    }

    function addToCart(product) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const existingProduct = cart.find(p => p.id === product.id);

        if (existingProduct) {
            existingProduct.quantity = (existingProduct.quantity || 1) + 1;
            showToast("Quantity updated in cart!");
        } else {
            product.quantity = 1;
            cart.push(product);
            showToast("Product added to cart!");
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();

        <?php if (isset($_SESSION['user_id'])): ?>
        syncCartToServer();
        <?php endif; ?>
    }

function syncCartToServer() {
    let localCart = JSON.parse(localStorage.getItem('cart')) || [];

    fetch('sync_cart.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ cart: localCart })
    })
    .then(response => response.json())
    .then(data => {
        if (data.cart) {
            localStorage.setItem('cart', JSON.stringify(data.cart));
            updateCartCount();
        }
    })
    .catch(error => console.error('Cart sync error:', error));
}




    // Product Details Modal open event
    document.querySelectorAll('.view-details-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            selectedProduct = JSON.parse(this.dataset.product);

            document.getElementById('modalProductImage').src = selectedProduct.image;
            document.getElementById('productDetailsTable').innerHTML = `
                <tr><th>Name</th><td>${selectedProduct.name}</td></tr>
                <tr><th>Category</th><td>${selectedProduct.category}</td></tr>
                <tr><th>Description</th><td>${selectedProduct.description}</td></tr>
                <tr><th>Weight</th><td>${selectedProduct.weight ? selectedProduct.weight + ' Kg' : 'N/A'}</td></tr>

                <tr><th>Price</th><td>₦${Number(selectedProduct.price).toLocaleString('en-NG', { minimumFractionDigits: 2 })}</td></tr>
            `;

            const whatsappLink = `https://wa.me/2349053083075?text=Interested%20in%20${encodeURIComponent(selectedProduct.name)}%20for%20₦${selectedProduct.price}`;
            document.getElementById('whatsappBtn').href = whatsappLink;

            if (selectedProduct.pdf) {
                document.getElementById('pdfFrame').src = selectedProduct.pdf;
                document.getElementById('productPdfViewer').style.display = 'block';
            } else {
                document.getElementById('pdfFrame').src = '';
                document.getElementById('productPdfViewer').style.display = 'none';
            }
        });
    });

    // Add to cart from modal
    addToCartModalBtn.addEventListener('click', () => {
        if (selectedProduct) addToCart(selectedProduct);
    });

    // Add to cart buttons outside modal
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const product = JSON.parse(this.dataset.product);
            addToCart(product);
        });
    });

    updateCartCount();

    <?php if (isset($_SESSION['user_id'])): ?>
    // On page load, sync cart from localStorage to server for logged-in users
    syncCartToServer();
    <?php endif; ?>

    // Category Filter (optional filtering logic example)
    document.getElementById('categoryFilter').addEventListener('change', function () {
        const selectedCategory = this.value;
        const products = document.querySelectorAll('.product-card');

        products.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>

<?php include('includes/footer.php'); ?>
