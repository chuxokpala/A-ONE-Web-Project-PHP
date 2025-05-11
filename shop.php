<!-- shop.php -->
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
    margin-top: 0px;
">
  <!-- Cart button -->
  <a href="cart.php" style="text-decoration: none;">
    <div id="cartCounter" style="
        background: white;
        color: blue;
        padding: 5px 10px;
        border-radius: 2px; /* Changed to rectangular */
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 2px;
    ">
        🛒 <span id="cartCount">0</span>
    </div>
  </a>
</div>

<!-- Products Section -->
<div class="container my-5">
    <!-- Filter Dropdown -->
    <div class="mb-4 d-flex justify-content-end">
        <select id="categoryFilter" class="form-select w-auto">
            <option value="All">All Categories</option>
        </select>
    </div>

    <!-- Products Grid -->
    <div id="productsGrid" class="row g-4">
        <?php foreach ($products as $index => $product): ?>
        <div class="col-md-4 product-card" data-category="<?php echo htmlspecialchars($product['category']); ?>">
            <div class="card h-100 text-center d-flex flex-column align-items-center">
                <img src="<?php echo $product['image']; ?>" class="card-img-top mx-auto" style="height: 200px; width: 200px; object-fit: contain;" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                    <p class="fw-bold text-dark mb-1">₦<?php echo number_format($product['price'], 2); ?></p>

                    <?php
                        $rating = $product['rating'];
                        if (isset($rating['stars']) && isset($rating['count'])) {
                            $starsFloat = round($rating['stars'] / 10, 1);
                            $ratingText = "<span style='color: #FFA500;'>⭐</span> <span style='color: #000;'>{$starsFloat} ({$rating['count']} reviews)</span>";
                        } else {
                            $ratingText = "<span style='color: #000;'>No rating available</span>";
                        }
                    ?>
                    <p class="fw-semibold mb-2"><?php echo $ratingText; ?></p>

                    <div class="mt-auto d-flex justify-content-center gap-2">
                        <button 
                            class="btn btn-primary view-details-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal"
                            data-product='<?php echo json_encode($product); ?>'>
                            View Details
                        </button>
                        <button 
                            class="btn btn-success add-to-cart-btn" 
                            data-product='<?php echo json_encode($product); ?>'>
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
          <tbody id="productDetailsTable">
            <!-- Product details will be injected here -->
          </tbody>
        </table>
        <div class="pdf-viewer mt-4" id="productPdfViewer" style="display: none;">
          <h6>Product Brochure</h6>
          <iframe id="pdfFrame" src="" width="100%" height="400px" style="border: 1px solid #ccc;"></iframe>
        </div>
      </div>
      <div class="modal-footer justify-content-center d-flex gap-3">
        <button id="addToCartBtn" class="btn" style="background-color: #d35400; color: white;">
          Add to Cart
        </button>        
        <a id="whatsappBtn" class="btn btn-success" target="_blank" style="background-color: #075E54; border: none;">
          <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Toast Message -->
<div id="toast" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
  <div id="toastMessage" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">Product added to cart!</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>


<!-- JS Section -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-details-btn');
    const addToCartModalBtn = document.getElementById('addToCartBtn');
    const floatingCart = document.getElementById('floatingCart');
    const cartCount = document.getElementById('cartCount');
    let selectedProduct = null;

    // Toast setup
    const toastElement = document.getElementById('toastMessage');
    const toast = new bootstrap.Toast(toastElement);

    function renderRating(rating) {
        if (!rating || typeof rating.stars !== 'number' || typeof rating.count !== 'number') {
            return 'No rating available';
        }
        const starsOutOf5 = Math.round(rating.stars / 10);
        return '★'.repeat(starsOutOf5) + '☆'.repeat(5 - starsOutOf5) + ` (${rating.count} reviews)`;
    }

    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cartCount.textContent = cart.length;
    }

    function showToast(message) {
        toastElement.querySelector('.toast-body').textContent = message;
        toast.show();
    }

    function addToCart(product) {
        console.log(localStorage.getItem('cart'));
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const exists = cart.some(p => p.name === product.name);
        if (!exists) {
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            showToast("Product added to cart!");
        } else {
            showToast("Product is already in cart.");
        }
    }

    // Populate category filter
    const categories = new Set();
    document.querySelectorAll('.product-card').forEach(card => {
        categories.add(card.dataset.category);
    });
    const filterSelect = document.getElementById('categoryFilter');
    categories.forEach(category => {
        const option = document.createElement('option');
        option.value = category;
        option.textContent = category;
        filterSelect.appendChild(option);
    });

    filterSelect.addEventListener('change', function () {
        const selected = this.value;
        document.querySelectorAll('.product-card').forEach(card => {
            card.style.display = (selected === 'All' || card.dataset.category === selected) ? '' : 'none';
        });

        updateCartCount(); // <--- Add this line here
    });

    viewButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            const product = JSON.parse(this.dataset.product);
            selectedProduct = product;

            document.getElementById('modalProductImage').src = product.image;
            document.getElementById('modalProductImage').alt = product.name;

            document.getElementById('whatsappBtn').href =
                `https://wa.me/2349053083075?text=I'm%20interested%20in%20the%20${encodeURIComponent(product.name)}%20priced%20at%20₦${Number(product.price).toLocaleString('en-NG', { minimumFractionDigits: 2 })}`;

            const detailsTable = document.getElementById('productDetailsTable');
            detailsTable.innerHTML = `
                <tr><th>Name</th><td>${product.name}</td></tr>
                <tr><th>Category</th><td>${product.category}</td></tr>
                <tr><th>Description</th><td>${product.description}</td></tr>
                <tr><th>Price</th><td>₦${Number(product.price).toLocaleString('en-NG', {minimumFractionDigits: 2})}</td></tr>
                <tr><th>Brand ID</th><td>${product.brandID}</td></tr>
                <tr><th>Keywords</th><td>${product.keywords.join(', ')}</td></tr>
                <tr><th>Rating</th><td>${renderRating(product.rating)}</td></tr>
            `;

            const pdfViewer = document.getElementById('productPdfViewer');
            const pdfFrame = document.getElementById('pdfFrame');
            if (product.pdf) {
                pdfFrame.src = product.pdf;
                pdfViewer.style.display = 'block';
            } else {
                pdfViewer.style.display = 'none';
            }
        });
    });

    // Add to cart from modal
    addToCartModalBtn.addEventListener('click', () => {
        if (selectedProduct) addToCart(selectedProduct);
    });

    // Add to cart from grid
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const product = JSON.parse(this.dataset.product);
            addToCart(product);
        });
    });

    function syncCartToServer() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Send cart (as array of product IDs) to PHP
  fetch('cart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ cart: cart.map(item => item.id) })
  })
  .then(response => {
    if (!response.ok) throw new Error('Failed to sync cart');
    return response.json();
  })
  .then(data => {
    console.log('Cart synced:', data);
  })
  .catch(error => {
    console.error('Error syncing cart:', error);
  });
}

    updateCartCount();
});
</script>

<?php include('includes/footer.php'); ?>
