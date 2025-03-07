<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the request
$id = $_POST['id'];

// Delete the record from the database
$sql = "DELETE FROM contact_messages WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

