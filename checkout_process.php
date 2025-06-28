<?php
header('Content-Type: application/json');
require 'config/db.php';

$data = json_decode(file_get_contents('php://input'), true);

// Validate required data
if (
    !isset($data['cart'], $data['total'], $data['shipping_price'], $data['receiver']) ||
    !is_array($data['cart']) || !is_array($data['receiver'])
) {
    echo json_encode(['status' => 'error', 'message' => 'Missing cart, receiver, or shipping data']);
    exit;
}

$user_id = $data['user_id'] ?? null;
$cart = $data['cart'];
$total_price = $data['total'];
$shipping_price = $data['shipping_price'];
$tx_ref = $data['tx_ref'] ?? '';
$flutterwave_id = $data['flutterwave_id'] ?? '';
$payment_status = $data['payment_status'] ?? 'pending';

$receiver = $data['receiver'];
$receiver_name = $receiver['name'] ?? 'Guest';
$receiver_phone = $receiver['phone'] ?? '08000000000';
$receiver_address = $receiver['address'] ?? 'Unknown address';
$receiver_station_id = (int)($receiver['station_id'] ?? 1);

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) throw new Exception($conn->connect_error);

    // GIGL Login
    $loginPayload = json_encode([
        "email" => "sales@aesolarltd.com",
        "password" => "jesusc"
    ]);

    $ch = curl_init("https://thirdpartynode.theagilitysystems.com/login");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $loginPayload,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json']
    ]);
    $loginResponse = curl_exec($ch);
    curl_close($ch);
    $loginData = json_decode($loginResponse, true);

    if (!isset($loginData['data']['access-token'])) throw new Exception("GIGL login failed");
    $token = $loginData['data']['access-token'];

    // Shipment Payload
    $shipmentItems = array_map(function ($item) {
        return [
            "ItemName" => $item['name'],
            "Description" => $item['name'],
            "SpecialPackageId" => 0,
            "Quantity" => $item['quantity'],
            "Weight" => $item['weight'] ?? 1,
            "IsVolumetric" => false,
            "Length" => 0,
            "Width" => 0,
            "Height" => 0,
            "ShipmentType" => 1,
            "Value" => $item['price'] * $item['quantity']
        ];
    }, $cart);

    $shipmentPayload = [
        "SenderDetails" => [
            "SenderLocation" => ["Latitude" => "6.5244", "Longitude" => "3.3792"],
            "SenderName" => "Your Store",
            "SenderPhoneNumber" => "08011112222",
            "SenderStationId" => 4,
            "SenderAddress" => "Your Store Address",
            "InputtedSenderAddress" => "Your Store Address",
            "SenderLocality" => "Store Locality"
        ],
        "ReceiverDetails" => [
            "ReceiverLocation" => [
                "Latitude" => "6.5244",
                "Longitude" => "3.3792",
                "FormattedAddress" => $receiver_address
            ],
            "ReceiverStationId" => $receiver_station_id,
            "ReceiverName" => $receiver_name,
            "ReceiverPhoneNumber" => $receiver_phone,
            "ReceiverAddress" => $receiver_address,
            "InputtedReceiverAddress" => $receiver_address
        ],
        "ShipmentDetails" => [
            "VehicleType" => 1,
            "IsFromAgility" => 0,
            "IsBatchPickUp" => 0
        ],
        "ShipmentItems" => $shipmentItems
    ];

    // Send to GIGL
    // $ch = curl_init("https://thirdpartynode.theagilitysystems.com/capture/preshipment");
    $ch = curl_init("https://thirdpartynode.theagilitysystems.com/shipments/create");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => json_encode($shipmentPayload),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'access-token: ' . $token
        ]
    ]);
    $shipResponse = curl_exec($ch);
    curl_close($ch);
    $shipData = json_decode($shipResponse, true);

    // if (!isset($shipData['data']['Waybill'])) throw new Exception("Shipment creation failed");
    // $waybill = $shipData['data']['Waybill'];
    
    if (!isset($shipData['data']['Waybill']) && !isset($shipData['data']['WaybillNumber'])) {
    throw new Exception("Shipment creation failed: " . json_encode($shipData));
    }
    $waybill = $shipData['data']['Waybill'] ?? $shipData['data']['WaybillNumber'];


    // Save order
    $stmt = $conn->prepare("INSERT INTO orders 
        (user_id, items, total_price, shipping_price, status, tracking_code, estimated_delivery, waybill) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        if (!$stmt) {
    throw new Exception("Prepare failed: " . $conn->error);
    }

    $items_json = json_encode($cart);
    $tracking_code = substr(md5($tx_ref), 0, 10);
    $eta = date('Y-m-d', strtotime('+5 days'));
    
    $stmt->bind_param("isddssss", $user_id, $items_json, $total_price, $shipping_price, $payment_status, $tracking_code, $eta, $waybill);
    // $stmt->execute();

    if (!$stmt->execute()) {
    throw new Exception("Database error: " . $stmt->error);
    }

    echo json_encode(['status' => 'success', 'message' => 'Order and shipment created', 'waybill' => $waybill]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
}
