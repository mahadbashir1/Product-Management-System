<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "inventory_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed"]));
}
?>