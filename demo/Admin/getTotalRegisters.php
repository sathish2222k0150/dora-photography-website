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

// Query to get total number of registers
$sql = "SELECT COUNT(*) AS totalRegisters FROM admin_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalRegisters = $row["totalRegisters"];
    echo json_encode(["totalRegisters" => $totalRegisters]);
} else {
    echo json_encode(["totalRegisters" => 0]);
}

$conn->close();

