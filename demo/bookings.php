<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DORA Photography </title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="icon" href="./Images/logo.jpg" type="icon">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<button class="continue-btn">
    <a href="./index 1.php">Back</a>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
    <style>
        .continue-btn {
  cursor: pointer;
  font-weight: 700;
  font-family: Helvetica,"sans-serif";
  transition: all .2s;
  padding: 10px 20px;
  border-radius: 100px;
  background: #cfef00;
  border: 1px solid transparent;
  display: flex;
  align-items: center;
  font-size: 15px;
}

.continue-btn :hover {
  background: #c4e201;
}

.continue-btn  > svg {
  width: 34px;
  margin-left: 10px;
  transition: transform .3s ease-in-out;
}

.continue-btn :hover svg {
  transform: translateX(5px);
}

.continue-btn :active {
  transform: scale(0.95);
}


    </style>
</button>
<body>
    <style>
         body {
    font-family: "Arial", sans-serif;
    margin: 0;
    padding: 0;
    background-image: url("./images/bookings.jpg");
    background-size: cover;
}

h1 {
    text-align: center;
    color: #333;
    margin-top: 85px;
    margin-left: 50px;
    margin-right: 110px;
}

form {
    width: 300px;
    margin: 20px auto;
    padding: 15px;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 70px;
    margin-top: 80px;
    margin-left: 540px;
    margin-right: 60px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-family: "Kalam", cursive; /* Apply Kalam font to label */
    font-weight: 700;
    font-style: normal;
}

input,
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    font-family: "Kalam", cursive; /* Apply Kalam font to input and select */
    font-weight: 300;
    font-style: normal;
}

.btn {
  --color1: white;
  --color2: white;
  perspective: 1000px;
  padding: 1em 1em;
  background: linear-gradient(var(--color1), var(--color2));
  border: none;
  outline: none;
  font-size: 20px;
  font-family: "kalam", cursive;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 4px;
  color: black;
  text-shadow: 0 10px 10px #000;
  cursor: pointer;
  transform: rotateX(70deg) rotateZ(30deg);
  transform-style: preserve-3d;
  transition: transform 0.5s;
}

.btn::before {
  content: "";
  width: 100%;
  height: 15px;
  background-color: var(--color2);
  position: absolute;
  bottom: 0;
  right: 0;
  transform: rotateX(90deg);
  transform-origin: bottom;
}

.btn::after {
  content: "";
  width: 15px;
  height: 100%;
  background-color: var(--color1);
  position: absolute;
  top: 0;
  right: 0;
  transform: rotateY(-90deg);
  transform-origin: right;
}

.btn:hover {
  transform: rotateX(30deg) rotateZ(0);
}
.success-message {
            color: #4CAF50;
            background-color: #e7f3eb;
            border: 1px solid #4CAF50;
            padding: 1px;
            border-radius: 5px;/* You can change the color to your preference */
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
            width: 50%;
            margin-left: 40vh;
        }
    </style>
    
</head>
<body>
<?php
// Database connection details
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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $booking_date = $_POST['booking_date'];

    // SQL to insert data into the bookings table
    $sql = "INSERT INTO bookings (name, email, phone, category, booking_date, confirmation_status)
            VALUES ('$name', '$email', '$phone', '$category', '$booking_date', 'pending')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="success-message"> Thank you for choosing our services. Please wait for confirmation.</div>';

        // Additional logic for sending email or further processing
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
    <h1>For Bookings</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="portrait">Portrait</option>
            <option value="wedding">Wedding</option>
            <option value="event">Event</option>
            <!-- Add more categories as needed -->
        </select>

        <label for="booking_date">Booking Date:</label>
        <input type="date" id="booking_date" name="booking_date" required>

        <button class="btn" type="submit">Book Now</button>
    </form>

   
</body>
</html>
