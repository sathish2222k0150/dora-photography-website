<?php
session_start();

// Check if user is already logged in, redirect to admin page
if (isset($_SESSION['admin_id'])) {
    header("Location: admin.php");
    exit();
}

// Include database connection
// Include database connection
$servername="localhost";
$username="root";
$password="";
$dbname="db_sample";

// Simulate login for demonstration purposes
// In a real-world scenario, validate user credentials from the database
// and set the session variables accordingly
$admin_id = 1;
$_SESSION['admin_id'] = $admin_id;
$_SESSION['admin_username'] = "admin";

mysqli_close($con);

