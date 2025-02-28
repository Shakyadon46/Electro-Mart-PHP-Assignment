<?php
$host = "127.0.0.1";  // Use "127.0.0.1" instead of "localhost" to avoid socket issues
$dbname = "shop_db";  
$username = "root";  
$password = "";  // Leave empty if no password
$port = 3307;  // Add this line for the correct port

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
