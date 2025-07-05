<?php
// Read the raw POST payload
$payload = file_get_contents("php://input");
$event = json_decode($payload, true);

// Log the event for debugging (optional)
file_put_contents("webhook_log.txt", print_r($event, true), FILE_APPEND);

// Your Flutterwave secret hash (from dashboard settings)
$secret_hash = '';

// Get the signature from header
$signature = $_SERVER['HTTP_VERIF_HASH'] ?? '';

// Verify signature
if (!$signature || $signature !== $secret_hash) {
    http_response_code(401); // Unauthorized
    exit("Invalid signature");
}

// Proceed with event handling
if ($event['event'] === 'charge.completed') {
    $data = $event['data'];

    if ($data['status'] === 'successful') {
        // Payment is successful
        $tx_ref = $data['tx_ref'];
        $amount = $data['amount'];
        $customer_email = $data['customer']['email'];
        $transaction_id = $data['id'];

        // ✅ TODO: Mark order as paid in your DB
        // ✅ TODO: Fulfill the order, send confirmation, etc.

        // Example: update_order_status($tx_ref, 'paid', $transaction_id);
    }
}

// Respond with success
http_response_code(200);
echo "Webhook received";
