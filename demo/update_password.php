<?php
// ... (Your existing code for database connection)
    // Database connection parameters
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "db_sample";
// Function to handle password reset form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset_password"])) {
    $resetName = $_POST["resetName"];
    $newPassword = $_POST["newPassword"];

    // Perform SQL update to set the updated password
    $updateSql = "UPDATE users SET update_password='$newPassword' WHERE name='$resetName'";
    $updateResult = $conn->query($updateSql);

    if ($updateResult) {
        echo "Password updated successfully";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
