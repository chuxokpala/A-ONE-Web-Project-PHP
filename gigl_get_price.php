<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

// Log incoming request data
file_put_contents('gigl_log.txt', print_r($data, true), FILE_APPEND);

try {
    // 🔎 Step 1: Attempt Login to GIGL
    $loginPayload = json_encode([
        "email" => trim("sales@aesolarltd.com"),
        "password" => trim("jesusc") // Replace with correct credentials
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
    
    file_put_contents('gigl_raw_login_response.txt', $loginResponse, FILE_APPEND);


    // Log login response
    file_put_contents('gigl_login_log.txt', print_r($loginData, true), FILE_APPEND);
    file_put_contents('gigl_login_error_log.txt', print_r($loginResponse, true), FILE_APPEND);


    if (!isset($loginData['data']['access-token'])) {
        throw new Exception("GIGL login failed - No access token received");
    }
    $token = $loginData['data']['access-token'];

    // 🔎 Step 2: Send Shipping Price Request to GIGL
    $ch = curl_init("https://thirdpartynode.theagilitysystems.com/price");

    //$ch = curl_init("https://thirdpartynode.theagilitysystems.com/shipments/create");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'access-token: ' . $token
        ]
    ]);
    $priceResponse = curl_exec($ch);
    
    // Log CURL errors if request fails
    if ($priceResponse === false) {
        file_put_contents('gigl_response_log.txt', "CURL Error: " . curl_error($ch), FILE_APPEND);
        throw new Exception("CURL Error: " . curl_error($ch));
    } else {
        file_put_contents('gigl_response_log.txt', $priceResponse, FILE_APPEND);
    }

    curl_close($ch);
    $priceData = json_decode($priceResponse, true);

    // Log full response from GIGL
    file_put_contents('gigl_ship_response_log.txt', print_r($priceData, true), FILE_APPEND);

    // 🔎 Step 3: Validate Response and Extract GrandTotal
    if (!isset($priceData['data']['GrandTotal'])) {
        throw new Exception("Invalid response from GIGL - No GrandTotal found");
    }

    echo json_encode(['status' => 'success', 'price' => $priceData['data']['GrandTotal']]);

} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
