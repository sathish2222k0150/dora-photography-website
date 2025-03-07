<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database Connection
    $con = mysqli_connect("localhost", "root", "", "db_sample");

    // Check connection
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get user input using prepared statements
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];

    // Retrieve user data from the admin_users table using a prepared statement
    $sql = "SELECT * FROM admin_users WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($password, $row['password'])) {
            // Successful login, set session variable and redirect to admin dashboard
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: Admin\index.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}

