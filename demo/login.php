<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $loginName = $_POST["loginName"];
    $loginPassword = $_POST["loginPassword"];

    // Perform SQL select (sanitize inputs before using in real-world applications)
    $sql = "SELECT * FROM users WHERE name='$loginName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        $updatePassword = $row['update_password'];

        $isLoginPasswordValid = password_verify($loginPassword, $hashedPassword);

if (!empty($updatePassword)) {
    // Check both the main password and the update password
    $isUpdatePasswordValid = password_verify($loginPassword, $updatePassword);

    if ($isLoginPasswordValid || $isUpdatePasswordValid) {
        // Redirect to the next page after successful login
        header("Location: index.php");
        exit();
    }
} 
    else {
    // Check only the main password
    if ($isLoginPasswordValid) {
        // Redirect to the next page after successful login
        header("Location: index.php");
        exit();
    }
}


        // Check the main password
        $isLoginPasswordValid = password_verify($loginPassword, $hashedPassword);

        if ($isLoginPasswordValid) {
            // Redirect to the next page after successful login
            header("Location: index.php");
            exit();
        }
        else {
            // Set error message
            $errorMsg = 'Invalid username or password';
        }
    } else {
        // Set error message
        $errorMsg = 'Invalid username or password';
    }
}
    


// Close connection
$conn->close();
?>

<!-- Login Form -->
<div id="login">
    <h2>Login</h2>
     <?php
    // Display error message if present
    if (!empty($errorMsg)) {
        echo '<p style="color: red;">' . $errorMsg . '</p>';
    }
    ?>
    <form action="#" method="post">
    <link rel="stylesheet" href="styles.css">
        <label for="loginName">Name:</label>
        <input type="text" id="loginName" name="loginName" required><br><br>
        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required><br><br>
        <input type="submit" value="Login" name="login">
    </form>
    <p>Forgot your password? <a href="./forgot_password.php">Reset it here</a></p>
    
</div>
