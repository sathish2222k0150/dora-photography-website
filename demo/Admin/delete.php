<?php
// Database Connection
$con = mysqli_connect("localhost", "root", "", "db_sample");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete image record from database using prepared statement
$sql = "DELETE FROM tbl_images WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);

if ($stmt->execute()) {
    // Delete image from server
    $imagePath = "uploads/" . $_GET["name"];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Redirect to index 2 page with status = 1
    header("location:index 2.php?status=1");
} else {
    // Redirect to index 2 page with status = 0
    header("location:index 2.php?status=0");
}

$stmt->close();
$con->close();

