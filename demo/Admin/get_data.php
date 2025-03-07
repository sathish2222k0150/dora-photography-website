<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = 12;
$offset = ($page - 1) * $itemsPerPage;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contact_messages LIMIT $itemsPerPage OFFSET $offset";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode(['data' => $data]);
