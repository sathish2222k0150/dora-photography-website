<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database Connection
    $con = mysqli_connect("localhost", "root", "", "db_sample");

    // Check connection
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get user input using prepared statements
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the username is already taken
    $check_username_query = "SELECT * FROM admin_users WHERE username = ?";
    $check_stmt = mysqli_prepare($con, $check_username_query);

    if ($check_stmt) {
        mysqli_stmt_bind_param($check_stmt, "s", $username);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
            echo "Error: Username is already taken. Please choose a different one.";
            mysqli_stmt_close($check_stmt);
            mysqli_close($con);
            exit;
        }

        mysqli_stmt_close($check_stmt);
    } else {
        echo "Error: " . mysqli_error($con);
        mysqli_close($con);
        exit;
    }

    // Insert user details into the admin_users table using a prepared statement
    $insert_query = "INSERT INTO admin_users (username, password) VALUES (?, ?)";
    $insert_stmt = mysqli_prepare($con, $insert_query);

    if ($insert_stmt) {
        mysqli_stmt_bind_param($insert_stmt, "ss", $username, $password);
        mysqli_stmt_execute($insert_stmt);
        mysqli_stmt_close($insert_stmt);

        echo "Registration successful! You can now <a href='admin_login.php'>login</a>.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}

