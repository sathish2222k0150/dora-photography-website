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

// Delete the record from the database
$sql = "DELETE FROM admin_users WHERE user_id=$userId";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}

$conn->close();

