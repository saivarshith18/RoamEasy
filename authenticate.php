<?php
$host = "localhost"; // e.g., localhost
$user = "root@localhost";
$pass = "roameasy@123";
$db = "roameasy";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to securely hash the password
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify the password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Example of usage:
// $hashedPassword = hashPassword("user_password");
// $verified = verifyPassword("user_password", $hashedPassword);
?>
