<?php
session_start();
include('includes/header.php');
?>

<div class="container my-5">
    <h2>Your Shopping Cart 🛒</h2>
    <div id="cartItems" class="my-4">
        <!-- Cart items will be rendered here by JS -->
    </div>

<div id="cartSummary" style="display:none;">
    <div class="table-responsive mb-3">
        <table class="table table-bordered text-end">
            <tbody>
                <tr>
                    <th class="text-start">Total (Items)</th>
                    <td><span id="totalPrice">₦0.00</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php if (isset($_SESSION['user_id']) || !isset($_SESSION['user_id'])): ?>
        <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
    <?php else: ?>
        <p class="text-warning">Please <a href="login.php">login</a> to proceed to checkout.</p>
    <?php endif; ?>
</div>


    <div id="emptyCartMessage" class="alert alert-info" style="display:none;">
        Your cart is empty. <a href="shop.php">Start shopping now!</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const cartItemsDiv = document.getElementById('cartItems');
    const cartSummary = document.getElementById('cartSummary');
    const totalPriceEl = document.getElementById('totalPrice');
    const emptyCartMessage = document.getElementById('emptyCartMessage');

function syncCartFromServer() {
    fetch('sync_cart.php')
        .then(response => response.json())
        .then(data => {
            if (data.cart && data.cart.length > 0) {
                // Prevent duplicate overwriting
                const currentCart = JSON.parse(localStorage.getItem('cart')) || [];
                if (JSON.stringify(currentCart) !== JSON.stringify(data.cart)) {
                    localStorage.setItem('cart', JSON.stringify(data.cart));
                    updateCartCount();
                    renderCart();
                }
            }
        });
}



    function renderCart() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cartItemsDiv.innerHTML = '';

        if (cart.length === 0) {
            cartSummary.style.display = 'none';
            emptyCartMessage.style.display = 'block';
            return;
        }

        emptyCartMessage.style.display = 'none';
        cartSummary.style.display = 'block';

        let total = 0;

        cart.forEach((product, index) => {
            // Ensure quantity is defined
            if (!product.quantity || product.quantity < 1) product.quantity = 1;

            const itemTotal = Number(product.price) * product.quantity;
            total += itemTotal;

            const itemDiv = document.createElement('div');
            itemDiv.className = 'd-flex align-items-center justify-content-between mb-3 border p-3 rounded';

            itemDiv.innerHTML = `
                <div class="d-flex align-items-center gap-3">
                    <img src="${product.image}" alt="${product.name}" style="width: 80px; height: 80px; object-fit: contain;">
                    <div>
                        <h5>${product.name}</h5>
                        <p class="mb-0">₦${Number(product.price).toFixed(2)} x ${product.quantity} = ₦${itemTotal.toFixed(2)}</p>
                        <small class="text-muted">${product.category}</small>
                        <div class="mt-2">
                            <button class="btn btn-secondary btn-sm increase" data-index="${index}">+</button>
                            <span class="mx-2">${product.quantity}</span>
                            <button class="btn btn-secondary btn-sm decrease" data-index="${index}">-</button>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger btn-sm remove-item" data-index="${index}">Remove</button>
            `;

            cartItemsDiv.appendChild(itemDiv);
        });

        totalPriceEl.textContent = new Intl.NumberFormat('en-NG', {
            style: 'currency',
            currency: 'NGN'
        }).format(total);

        // Button handlers
        document.querySelectorAll('.increase').forEach(button => {
            button.addEventListener('click', e => {
                const index = e.target.getAttribute('data-index');
                updateQuantity(index, 1);
            });
        });

        document.querySelectorAll('.decrease').forEach(button => {
            button.addEventListener('click', e => {
                const index = e.target.getAttribute('data-index');
                updateQuantity(index, -1);
            });
        });

        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', e => {
                const index = e.target.getAttribute('data-index');
                removeFromCart(index);
            });
        });
    }

    function updateQuantity(index, delta) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (!cart[index]) return;

        cart[index].quantity = (cart[index].quantity || 1) + delta;

        if (cart[index].quantity <= 0) {
            cart.splice(index, 1);  // remove item if quantity is 0
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
        updateCartCount();
    }

   function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);  // Remove item from array

    localStorage.setItem('cart', JSON.stringify(cart));  // Save the updated cart in storage
    renderCart();
    updateCartCount();

    // If the user is logged in, sync to server
    <?php if (isset($_SESSION['user_id'])): ?>
    syncCartToServer();
    <?php endif; ?>
}

    function updateCartCount() {
        const cartCountEl = document.getElementById('cartCount');
        if (!cartCountEl) return;
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        let totalCount = 0;
        cart.forEach(item => {
            totalCount += item.quantity || 1;
        });
        cartCountEl.textContent = totalCount;
    }

    renderCart();
    updateCartCount();
    syncCartFromServer();

});
</script>


<?php include('includes/footer.php'); ?>
