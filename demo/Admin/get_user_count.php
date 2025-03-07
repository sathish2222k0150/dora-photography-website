<?php
$hostname = "localhost"; // Replace with your actual database hostname
$username = "root"; // Replace with your actual database username
$password = ""; // Replace with your actual database password
$database = "db_sample"; // Replace with your actual database name

// Create a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get the user count from the contact_message table
$query = "SELECT COUNT(*) AS userCount FROM contact_message";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the user count from the result
    $row = mysqli_fetch_assoc($result);
    echo "Total Users: " . $row['userCount'];
} else {
    // Display an error message if the query fails
    echo 'Error fetching user count';
}

// Close the database connection
mysqli_close($connection);

