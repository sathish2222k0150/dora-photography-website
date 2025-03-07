<?php
// Function to display user details
function displayUserDetails($servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get user details
    $sqlDetails = "SELECT * FROM admin_users";
    $resultDetails = $conn->query($sqlDetails);

    // Output user details in div format
    echo "<div id='userDetailsContainer'><table border='1'>
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

    echo "</table></div>";

    // Close connection
    $conn->close();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

// Call the function to display user details
displayUserDetails($servername, $username, $password, $dbname);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/logo.jpg" type="icon"> 
    <title>Dora Photography</title>
    <style>
      body {
    background-color: #b3e6ff;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-top: 20px;
}

p {
    color: #333;
    text-align: center;
}
h2{
    text-align: center;
}
form {
    width: 300px;
    margin: 20px auto;
    padding: 15px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    padding: 8px 20px;
    border: 1px solid black;
    border-radius: 4px;
    background-color: black;
    font-size: 20px;
    font-family: cursive;
    color: white;
    line-height: inherit;
    cursor: pointer;
    margin-left: 12vh;
}

button:hover {
    background-color: aquamarine;
    color: black;
}
#userDetailsContainer {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    width: 50%;
    margin-left: 40vh;
}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

/* Add more styles as needed */

nav {
            text-align: center;
            margin-top: 20px;
            margin-right: 150vh;
        }

        nav a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
<nav>
        <a href="admin users.php">Return to Dashboard</a>
    </nav>
    <h1>Admin Operations</h1>

    <p>Total number of Admins: <span id="totalRegisters">Loading...</span></p>
    <div id="userDetailsContainer"></div>    


    <h2>Update Record</h2>
    <form id="updateForm">
        <label for="userIdUpdate">User ID:</label>
        <input type="number" id="userIdUpdate" name="userIdUpdate" required>
        <label for="newUsername">New Username:</label>
        <input type="text" id="newUsername" name="newUsername" required>
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>
        <button type="button" onclick="updateRecord()">Update</button>
    </form>

    <h2>Delete Record</h2>
    <form id="deleteForm">
        <label for="userIdDelete">User ID:</label>
        <input type="number" id="userIdDelete" name="userIdDelete" required>
        <button type="button" onclick="deleteRecord()">Delete</button>
    </form>

    <script>
        function updateRecord() {
            var userId = document.getElementById("userIdUpdate").value;
            var newUsername = document.getElementById("newUsername").value;
            var newPassword = document.getElementById("newPassword").value;

            // Send data to server for updating the record
            fetch("update.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "userId=" + userId + "&newUsername=" + newUsername + "&newPassword=" + newPassword
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Record updated successfully");
                } else {
                    alert("Error updating record");
                }
            })
            .catch(error => console.error("Error:", error));
        }

        function deleteRecord() {
            var userId = document.getElementById("userIdDelete").value;

            // Send data to server for deleting the record
            fetch("delete users.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "userId=" + userId
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Record deleted successfully");
                } else {
                    alert("Error deleting record");
                }
            })
            .catch(error => console.error("Error:", error));
        }

        // Fetch total number of registers
        fetch("getTotalRegisters.php")
            .then(response => response.json())
            .then(data => {
                document.getElementById("totalRegisters").textContent = data.totalRegisters;
            })
            .catch(error => console.error("Error:", error));
            // Fetch user data and populate the table
        fetch("getUserData.php")
            .then(response => response.json())
            .then(data => {
                const userTableBody = document.getElementById("userTableBody");

                data.users.forEach(user => {
                    const row = document.createElement("tr");
                    const userIdCell = document.createElement("td");
                    userIdCell.textContent = user.userId;
                    const usernameCell = document.createElement("td");
                    usernameCell.textContent = user.username;
                    
                    // Add more cells for additional columns

                    row.appendChild(userIdCell);
                    row.appendChild(usernameCell);

                    userTableBody.appendChild(row);
                });
            })
            .catch(error => console.error("Error fetching user data:", error));
    </script>
</body>
</html>
