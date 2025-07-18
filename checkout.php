<?php session_start(); ?>
<?php require('includes/header.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-group { margin-bottom: 15px; }
  </style>
</head>
<body class="bg-light">

  <div class="container py-5">
    <h2 class="mb-4 text-center">Checkout Page</h2>

    <form id="shippingForm" class="bg-white p-4 shadow rounded">
      <h4 class="mb-3">Delivery Information</h4>
      <div class="mb-3">
        <input type="text" class="form-control" name="receiver_name" placeholder="Full Name" required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="receiver_phone" placeholder="Phone Number" required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="receiver_address" placeholder="Delivery Address" required>
      </div>
      <div class="mb-3">
        <select class="form-select" name="receiver_station_id" required>
          <option value="">Select Station</option>
          <option value="1">Aba</option>
          <option value="2">Abeokuta</option>
          <option value="3">Abakaliki</option>
          <option value="4">Abuja</option>
          <option value="5">Ado Ekiti</option>
          <option value="6">Akure</option>
          <option value="7">Asaba</option>
          <option value="8">Auchi</option>
          <option value="9">Bauchi</option>
          <option value="10">Benin</option>
          <option value="11">Bonny</option>
          <option value="12">Calabar</option>
          <option value="13">Eket</option>
          <option value="14">Ekpoma</option>
          <option value="15">Enugu</option>
          <option value="16">Gwagwalada</option>
          <option value="17">Ibadan</option>
          <option value="18">Ife</option>
          <option value="19">Ijebu-Ode</option>
          <option value="20">Ilorin</option>
          <option value="21">Jos</option>
          <option value="22">Kaduna</option>
          <option value="23">Kano</option>
          <option value="24">Katsina</option>
          <option value="25">Lafia</option>
          <option value="26">Lokoja</option>
          <option value="27">Lagos</option>
          <option value="28">Makurdi</option>
          <option value="29">Maiduguri</option>
          <option value="30">Minna</option>
          <option value="31">Nnewi</option>
          <option value="32">Nsukka</option>
          <option value="33">Onitsha</option>
          <option value="34">Owerri</option>
          <option value="35">Osogbo</option>
          <option value="36">Port Harcourt</option>
          <option value="37">Warri</option>
          <option value="38">Sapele</option>
          <option value="39">Sokoto/Gusau</option>
          <option value="40">Umuahia</option>
          <option value="41">Uyo</option>
          <option value="42">Yenegoa</option>
          <option value="43">Yola/Jalingo</option>
          <option value="44">Zaria</option>

          <!-- Add more dynamically -->
        </select>
      </div>
    </form>

    <div class="bg-white p-4 shadow rounded mt-4">
      <h5 class="mb-3">Cart Details</h5>

      <!-- <div id="cart-details"></div> -->
<div id="cart-details" class="table-responsive">
    <table class="table table-bordered align-middle text-center">
    <thead class="table-light">
      <tr>
        <th class="text-start">Item(s)</th>        <!-- align left -->
        <th class="text-center">Units</th>
        <th class="text-center">Unit Cost</th>
        <th class="text-end">Subtotal</th>         <!-- align right -->
      </tr>
    </thead>
      <tbody id="cart-body">
        <!-- JavaScript will fill this -->
      </tbody>
    </table>
  </div>

  <!-- Total Summary Table -->
  <div class="table-responsive">
    <table class="table table-bordered text-end mb-0">
      <tbody>
        <tr>
          <th class="text-start">Total (Items)</th>
          <td id="productTotal">₦0</td>
        </tr>
        <tr>
          <th class="text-start">Shipping</th>
          <td id="shippingCost">₦0</td>
        </tr>
        <tr class="table-light fw-bold">
          <th class="text-start">Grand Total</th>
          <td id="grandTotal">₦0</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    <div class="text-center mt-4">
      <button id="placeOrderBtn" class="btn btn-primary btn-lg">Pay Now</button>
    </div>
  </div>

  <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let productTotal = 0;
    let shippingCost = 0;

   function displayCart() {
  const tableBody = document.getElementById('cart-body');
  tableBody.innerHTML = ''; // Clear any previous items

  const formatter = new Intl.NumberFormat('en-NG', {
    style: 'currency',
    currency: 'NGN'
  });

  productTotal = 0;

  cart.forEach(item => {
    const row = document.createElement('tr');

    // Create Item Name cell
    const itemCell = document.createElement('td');
    itemCell.className = 'text-start';
    itemCell.textContent = item.name;    

    // Create Quantity cell
    const quantityCell = document.createElement('td');
    quantityCell.textContent = item.quantity;

    // Create Unit Cost cell
    const unitCostCell = document.createElement('td');
    unitCostCell.textContent = formatter.format(item.price);

    // Create Subtotal cell (Unit Price x Quantity)
    const subtotalCell = document.createElement('td');
    subtotalCell.className = 'text-end'; // align to the right
    const subtotal = item.price * item.quantity;

    subtotalCell.textContent = formatter.format(subtotal);

    // Append all cells to the row
    row.appendChild(itemCell);
    row.appendChild(quantityCell);
    row.appendChild(unitCostCell);
    row.appendChild(subtotalCell); //Add subtotal cell here

    // Append the row to the table
    tableBody.appendChild(row);

    // Add to total
    productTotal += subtotal;
  });

  updateTotals();
}

    function updateTotals() {
  // Format prices as Nigerian Naira
    const formatter = new Intl.NumberFormat('en-NG', {
      style: 'currency',
      currency: 'NGN'
    });

    // Show Total (Products only)
    document.getElementById('productTotal').textContent = formatter.format(productTotal);

    // Show Shipping
    document.getElementById('shippingCost').textContent = formatter.format(shippingCost);

    // Show Grand Total
    document.getElementById('grandTotal').textContent = formatter.format(productTotal + shippingCost);
    }

    document.querySelector('select[name="receiver_station_id"]').addEventListener('change', () => {
      const stationId = parseInt(document.querySelector('select[name="receiver_station_id"]').value);
      if (!stationId) return;

      const shipmentData = {
        SenderStationId: 4,
        ReceiverStationId: stationId,
        VehicleType: 1,
        IsFromAgility: false,
        CustomerCode: "ECO017121",
        CustomerType: 0,
        DeliveryOptionIds: [2],
        Value: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0),
        PickUpOptions: 1,
        ReceiverLocation: { Latitude: 6.5244, Longitude: 3.3792 },
        SenderLocation: { Latitude: 6.5244, Longitude: 3.3792 },
        ShipmentItems: cart.map(item => ({
          ItemName: item.name,
          Description: item.name,
          SpecialPackageId: 0,
          Quantity: item.quantity,
          Weight: item.weight || 1,
          IsVolumetric: false,
          Length: 0,
          Width: 0,
          Height: 0,
          ShipmentType: 1,
          Value: item.price * item.quantity
        }))
      };

      fetch('gigl_get_price.php', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(shipmentData)
      })
      .then(res => res.json())
      .then(res => {
        if (res.status === 'success') {
          shippingCost = res.price;
          updateTotals();
        } else {
          alert("Failed to get shipping price: " + res.message);
        }
      });
    });

    displayCart();

    document.getElementById('placeOrderBtn').addEventListener('click', function () {
      const form = document.getElementById('shippingForm');
      const formData = new FormData(form);
      const receiverDetails = {
        name: formData.get('receiver_name'),
        phone: formData.get('receiver_phone'),
        address: formData.get('receiver_address'),
        station_id: formData.get('receiver_station_id')
      };

      if (!receiverDetails.name || !receiverDetails.phone || !receiverDetails.address || !receiverDetails.station_id) {
        alert("Please complete the shipping form.");
        return;
      }

      const total = productTotal + shippingCost;
      const txRef = 'TX-' + Date.now();
      const user_id = <?php echo isset($_SESSION['user_id']) ? json_encode($_SESSION['user_id']) : 'null'; ?>;

      FlutterwaveCheckout({
        public_key: "FLWPUBK-18c4c7d1ae8edce759a23ad125c9cc98-X",
        tx_ref: txRef,
        amount: total,
        currency: "NGN",
        payment_options: "card,ussd,banktransfer",
        customer: {
          email: "<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'sales@aesolarltd.com'; ?>",
          phone_number: "<?php echo isset($_SESSION['user_phone']) ? $_SESSION['user_phone'] : '+2349053083075'; ?>",
          name: "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest User'; ?>"
        },
        callback: function (response) {
          if (response.status === "successful") {
            fetch("checkout_process.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({
                cart: cart,
                user_id: user_id,
                tx_ref: txRef,
                flutterwave_id: response.transaction_id,
                payment_status: response.status,
                total: total,
                shipping_price: shippingCost,
                receiver: receiverDetails
              })
            })
            .then(res => res.json())
            .then(data => {
              if (data.status === "success") {
                alert("Order placed! Waybill: " + data.waybill);
                localStorage.removeItem('cart');
                window.location.href = "order_confirmation.php";
              } else {
                alert("Order failed: " + data.message);
              }
            });
          } else {
            alert("Payment not completed.");
          }
        },
        customizations: {
          title: "A-ONE Electric & Solar",
          description: "Payment for items and delivery",
          logo: "./assets/web images/AESL Logo_PNG x1.png"
        }
      });
    });
  </script>
</body>
</html>

<?php require('includes/footer.php')?>
