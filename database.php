<?php
$host = "localhost";      // Your host (usually localhost)
$user = "root";           // Your database username
$pass = "";               // Your database password
$dbname = "portfolio";    // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Optional: set UTF-8 encoding for special characters
$conn->set_charset("utf8mb4");
?>
