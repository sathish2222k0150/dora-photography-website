<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/bookings details.jpg');
            background-size: cover;
            background-position: center;
            border-image: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            margin-top: 50px;
        }

        th,
        td {
            padding: 18px;
            text-align: center;
        }

        th {
            background-color: orange;
        }

        td {
            background-color: #e7d64a;
        }

        /* Apply some basic styling to the form */
        form {
            display: flex;
            flex-direction: column;
            max-width: 200px;
            /* Adjust the width as needed */
            margin: auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style labels and radio buttons */
        label {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        /* Style the submit button */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Add some spacing between form elements */
        form>* {
            margin-bottom: 5px;
        }

        /* Style the success message */
        .success-message {
            color: #4CAF50;
            background-color: #e7f3eb;
            border: 1px solid #4CAF50;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            margin-left: 40vh;
            text-align: center;
            width: 50%;
        }
        .center-message {
            color: #4CAF50;
            background-color: #e7f3eb;
            border: 1px solid #4CAF50;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            margin-left: 60vh;
            text-align: center;
            width: 30%;
        }

        /* Your Responsive Table CSS Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            line-height: 1.42em;
            color: #A7A1AE;
            background-color: #1F2739;
        }

        h1 {
            font-size: 3em;
            font-weight: 300;
            line-height: 1em;
            text-align: center;
            color: #4DC3FA;
        }

        h2 {
            font-size: 1em;
            font-weight: 300;
            text-align: center;
            display: block;
            line-height: 1em;
            padding-bottom: 2em;
            color: #FB667A;
        }

        h2 a {
            font-weight: 700;
            text-transform: uppercase;
            color: #FB667A;
            text-decoration: none;
        }

        .blue {
            color: #185875;
        }

        .yellow {
            color: #FFF842;
        }

        .container th h1 {
            font-weight: bold;
            font-size: 1em;
            text-align: center;
            color: #185875;
        }

        .container td {
            font-weight: normal;
            font-size: 1em;
            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
            -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
            color: black;
        }

        .container {
            text-align: left;
            overflow: hidden;
            width: 80%;
            margin: 0 auto;
            display: table;
            padding: 0 0 8em 0;
        }

        .container td,
        .container th {
            padding-bottom: 2%;
            padding-top: 2%;
            padding-left: 2%;
        }

        .container tr:nth-child(odd) {
            background-color: #323C50;
        }

        .container tr:nth-child(even) {
            background-color: #2C3446;
        }

        .container th {
            background-color: #1F2739;
        }

        .container td:first-child {
            color: #FB667A;
        }

        .container tr:hover {
            background-color: #464A52;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
        }

        .container td:hover {
            background-color: #FFF842;
            color: #403E10;
            font-weight: bold;
            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px,
                #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);
            transition-delay: 0s;
            transition-duration: 0.4s;
            transition-property: all;
            transition-timing-function: line;
        }

        @media (max-width: 800px) {
            .container td:nth-child(4),
            .container th:nth-child(4) {
                display: none;
            }
        }
        .nav{
            background-color: orange;
            border-radius: 10px;
            padding: 10px;
            width: 10%;
        }
    </style>

</head>
<body>
        <div class="nav">
        <li><a href="user.php">Dashboard</a></li>
        </div>
<?php

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$host = "localhost";
$username = "root";
$password = "";
$database = "db_sample";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display booking details in a table
function displayBookings($conn) {
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container">';
        echo "<table border='1'table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Category</th>
                    <th>Booking Date</th>
                    <th>Confirmation Status</th>
                    <th>Action</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['booking_date']}</td>
                    <td>{$row['confirmation_status']}</td>
                    <td>
                        <a href='?action=update&id={$row['id']}'>Update</a> |
                        <a href='?action=delete&id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No bookings found.";
    }
}

// Handle update and delete actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $bookingId = isset($_GET['id']) ? $_GET['id'] : null;

    if ($action == 'update') {
        // Display form for updating with Accept and Reject options
        echo "
            <form method='post'>
                <input type='hidden' name='bookingId' value='$bookingId'>
                <label for='accept'>Accept</label>
                <input type='radio' name='confirmation_status' value='accepted' id='accept'>
                <label for='reject'>Reject</label>
                <input type='radio' name='confirmation_status' value='rejected' id='reject'>
                <input type='submit' value='Submit'>
            </form>
        ";
    } elseif ($action == 'delete') {
        // Handle multiple deletes if 'id' is a comma-separated list
        $bookingIds = explode(',', $bookingId);

        foreach ($bookingIds as $id) {
            $sql = "DELETE FROM bookings WHERE id = $id";
            $result = $conn->query($sql);

            if (!$result) {
                echo "Error deleting booking with ID $id: " . $conn->error;
            }
        }

        echo "<div class='center-message'>Bookings ID $bookingId deleted successfully.</div>";
    } else {
        echo "Invalid action.";
    }
}

// Handle form submission for updating confirmation status
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingId = $_POST['bookingId'];
    $confirmationStatus = $_POST['confirmation_status'];

    // Update confirmation status in the database
    $sql = "UPDATE bookings SET confirmation_status = '$confirmationStatus' WHERE id = $bookingId";
    $result = $conn->query($sql);

    if ($result) {
        // Send email based on confirmation status
        $email = getEmailForBookingId($conn, $bookingId);

        if ($confirmationStatus == 'accepted') {
            sendConfirmationEmail($email);
        } elseif ($confirmationStatus == 'rejected') {
            sendRejectionEmail($email);
        }

        echo "<div class='center-message'>Booking with ID $bookingId updated successfully.</div>";
    } else {
        echo "Error updating confirmation status: " . $conn->error;
    }
}

// Display booking details
displayBookings($conn);

// Close the connection
$conn->close();

// Function to get email for a booking ID
function getEmailForBookingId($conn, $bookingId) {
    $sql = "SELECT email FROM bookings WHERE id = $bookingId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['email'];
    }

    return null;
}

// Function to send a confirmation email
function sendConfirmationEmail($recipientEmail) {
    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'sathish2222k0150@gmail.com';  // Replace with your email address
        $mail->Password = 'glxdgywppthvsxfx';  // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('sathish2222k0150@gmail.com', 'Dora Photography');  // Replace with your email and name

        // Recipient information
        $mail->addAddress($recipientEmail);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Booking Confirmation';
        $mail->Body = 'Your booking has been accepted.';

        // Send the email
        $mail->send();

        echo '<div class="success-message">Confirmation email sent successfully.</div>';
    } catch (Exception $e) {
        echo "Error sending confirmation email: {$mail->ErrorInfo}";
    }
}

// Function to send a rejection email
function sendRejectionEmail($recipientEmail) {
    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'sathish2222k0150@gmail.com';  // Replace with your email address
        $mail->Password = 'glxdgywppthvsxfx';  // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('sathish2222k0150@gmail.com', 'Dora Photography');  // Replace with your email and name

        // Recipient information
        $mail->addAddress($recipientEmail);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Booking Rejection';
        $mail->Body = 'Your booking has been rejected.';

        // Send the email
        $mail->send();

        echo '<div class="success-message">Rejection email sent successfully.</div>';
    } catch (Exception $e) {
        echo "Error sending rejection email: {$mail->ErrorInfo}";
    }
}

