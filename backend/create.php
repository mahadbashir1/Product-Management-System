<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}
header("Content-Type: application/json");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->name) && !empty($data->category) && isset($data->price) && isset($data->quantity)) {
    $stmt = $conn->prepare("INSERT INTO products (name, category, price, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $data->name, $data->category, $data->price, $data->quantity);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Product added successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to add product."]);
    }
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Incomplete data provided."]);
}
$conn->close();
?>