<?php
// Database Connection
$con = mysqli_connect("localhost", "root", "", "db_sample");

// Check if the parameters are set
if (isset($_GET['id'])) {
    // Get video ID from the query parameters
    $videoId = $_GET['id'];

    // Fetch video path from the database
    $sql = "SELECT video_path FROM tbl_videos WHERE id = {$videoId}";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $videoPath = 'uploads/videos/' . $row['video_path'];

        // Delete the video file
        if (file_exists($videoPath)) {
            unlink($videoPath);

            // Delete the video record from the database
            $deleteSql = "DELETE FROM tbl_videos WHERE id = {$videoId}";
            if ($con->query($deleteSql)) {
                // Redirect to index3.php with status parameter
                header('Location: index 3.php?status=1');
                exit;
            } else {
                // Handle database query error
                echo "Error: Unable to delete video record from the database.";
            }
        } else {
            // Handle the case where the file doesn't exist
            echo "Error: Video file not found.";
        }
    } else {
        // Handle the case where the video record doesn't exist in the database
        echo "Error: Video record not found in the database.";
    }
} else {
    // Handle the case where the parameters are not set
    echo "Error: Invalid parameters.";
}

