<?php
// Function to get total users count and display user details
function getTotalUsersDetails($servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get the number of registered users
    $sqlCount = "SELECT COUNT(user_id) AS total_users FROM admin_users";
    $resultCount = $conn->query($sqlCount);

    if ($resultCount->num_rows > 0) {
        // Output total users count in table format
        echo "<table border='1'>
                <tr>
                    <th>Total Users</th>
                </tr>";

        while ($row = $resultCount->fetch_assoc()) {
            echo "<tr><td>" . $row["total_users"] . "</td></tr>";
        }

        echo "</table>";

        // Query to get user details
        $sqlDetails = "SELECT * FROM admin_users";
        $resultDetails = $conn->query($sqlDetails);

        // Output user details in table format
        echo "<br><br>User Details:<br>";
        echo "<table border='1'>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                </tr>";

        while ($row = $resultDetails->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["user_id"] . "</td>
                    <td>" . $row["username"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No users found.";
    }

    // Close connection
    $conn->close();
}

// Usage example
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

getTotalUsersDetails($servername, $username, $password, $dbname);

