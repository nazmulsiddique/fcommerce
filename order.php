<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    echo $fullName = $_POST['fullName'];
    echo $phoneNumber = $_POST['phoneNumber'];
    echo $deliveryPoint = $_POST['deliveryPoint'];
    echo $fullAddress = $_POST['fullAddress'];
    echo $quantity = $_POST['quantity'];
    echo $totalAmount = $_POST['totalAmount'];
    echo $agree = $_POST['agree'];

    // Validate data
    if (empty($fullName) || empty($phoneNumber) || empty($deliveryPoint) || empty($quantity)) {
        echo json_encode(["success" => false, "message" => "All required fields must be filled!"]);
        exit;
    }
}
?>