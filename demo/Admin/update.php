<?php
// Connect to database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the request
$userId = $_POST["userId"];
$newUsername = $_POST["newUsername"];
$newPassword = $_POST["newPassword"];

// Hash the new password
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Update the record in the database
$sql = "UPDATE admin_users SET username='$newUsername', password='$hashedPassword' WHERE user_id=$userId";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}

$conn->close();

