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

if (!empty($data->id)) {
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $data->id);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Product deleted successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to delete product."]);
    }
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Product ID is missing."]);
}
$conn->close();
?>