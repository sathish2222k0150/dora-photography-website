<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample"; // Assuming your database is named db_sample
$tableName = "admin_users"; // Assuming your table is named admin_users

// Create connection
// Connect to the database
$dbConnection = new mysqli($servername, $username, $password, $dbname);

if ($dbConnection->connect_error) {
  die("Database connection failed: " . $dbConnection->connect_error);
}

// Fetch user data
$sql = "SELECT user_id, username FROM admin_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = array();

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    echo json_encode(array("users" => $users));
} else {
    echo json_encode(array("users" => array()));
}

$conn->close();

