
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="admin.css">
<script src="admin.js"></script>
<link rel="icon" href="./Images/logo.jpg" type="icon">
<div class='all'>

  <div class='admin-header'>

    <div class='header-text'>
      <h3>Adminstrator</h3>

      <?php

session_start();

// Assuming you have a valid database connection
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "db_sample";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user ID is set in the session
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // Fetch the username from the admin_users table
    $usernameQuery = "SELECT username FROM admin_users WHERE user_id = $userId";
    $usernameResult = $conn->query($usernameQuery);

    if ($usernameResult !== false && $usernameResult->num_rows > 0) {
        $row = $usernameResult->fetch_assoc();
        $username = $row['username'];

        // Display the username in the HTML
        echo "<div class='header-greet'>
                <span><i class='fa'>&#xf007;</i> Hello $username</span>
              </div>";
    } else {
        echo "Username not found.";
    }
} else {
    echo "User ID not set in the session.";
}

// Close the database connection
$conn->close();
?>

<style>
  /* Style the dropdown container */
.dropdown {
    display: inline-block;
    position: relative;
}

/* Style the button inside the dropdown */
.dropdown .dropbtn {
    background-color:transparent;
    color:  #999;
    padding: 10px;
    font-size: 12px;
    border: none;
    cursor: pointer;
    margin-left: 5px;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: red;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Show the dropdown content when the mouse is over the dropdown button */
.dropdown:hover .dropdown-content {
    display: block;
}

</style>

        <a href='logout.php' class='logout-btn'><i class="fa">&#xf011;</i></a>
      </div>

    </div>
  </div>

  <div class='admin-sidebar'>

    <li>

      <input placeholder='Search...' class='search-input' type='search' /><input type='submit' id='search-btn-1' class='fa' value='&#xf002;' />

    </li>

    <li>

      <a href='User.php'><i class="fa">&#xf0e4;</i> Dashboard</a>

    </li>

    <li>

      <a href='Users.php'><i class="fa">&#xf0c0;</i> Users</a>

    </li>

    <div class="dropdown">
    <a href="" class="dropbtn"><i class="fa">&#xf055;</i> Add Update</a>
    <div class="dropdown-content">
        <a href="index 2.php">Image</a>
        <a href="index 3.php">Video</a>
    </div>
</div>


    <li>

      <a href='register.php'><i class="fa">&#xf132;</i> Create Admin</a>

    </li>

    <span onclick="size()">
      <li id='all-nav' onclick="myFunction()">

        <a href='bookings.php' class='dropdown-btn'>📖 Bookings </a> <i class="fa fa-angle-down" aria-hidden="true"></i>

        <ul id='nav' class='second-nav-ul'>
          <li class='nav-items'>
            <a href='booking details.php'>Bookings Info</a>
          </li>

        </ul>

      </li>

    </span>

    

  </div>

  <div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101;</i> Dashboard</span>

        </div>

      </div>

      <section>
      <?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname= "db_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users count from contact_messages table
$usersQuery = "SELECT COUNT(id) AS userCount FROM contact_messages";
$usersResult = $conn->query($usersQuery);
$userCount = ($usersResult->num_rows > 0) ? $usersResult->fetch_assoc()['userCount'] : 0;

// Fetch admins count from admin_users table
$adminsQuery = "SELECT COUNT(user_id) AS adminCount FROM admin_users";
$adminsResult = $conn->query($adminsQuery);
$adminCount = ($adminsResult->num_rows > 0) ? $adminsResult->fetch_assoc()['adminCount'] : 0;

// Fetch total messages count
$messagesQuery = "SELECT COUNT(id) AS messageCount FROM contact_messages";
$messagesResult = $conn->query($messagesQuery);
$messageCount = ($messagesResult->num_rows > 0) ? $messagesResult->fetch_assoc()['messageCount'] : 0;
// Fetch total bookings count
$bookingsQuery = "SELECT COUNT(id) AS bookingCount FROM bookings";
$bookingsResult = $conn->query($bookingsQuery);
$bookingCount = ($bookingsResult->num_rows > 0) ? $bookingsResult->fetch_assoc()['bookingCount'] : 0;

// Close the database connection
$conn->close();
?>

        <div class='site-info'>

          <div class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf0c0;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php echo $userCount; ?></span></div>
              <div>Users</div>
            </div>

            <div class='info-box-footer'>

              <a href='Users.php' class='user-href'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #f0ad4e; border-color: #f0ad4e;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa">&#xf132;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php echo $adminCount; ?></span></div>
              <div>Total Admins!</div>
            </div>

            <div class='info-box-footer'>

              <a href='admin.php' class='user-href' style='color: #f0ad4e;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #5cb85c; border-color: #5cb85c;' class='all-quick-info'>

          <div class='info-icon'>✉️</div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php echo $messageCount; ?></span></div>
              <div>Total Messages!</div>
            </div>

            <div class='info-box-footer'>

              <a href='Users.php' class='user-href' style='color: #5cb85c;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #ff5256; border-color: #ff5256;' class='all-quick-info'>

          <div class='info-icon'>📖</div>

            <div class='text-right'>
            <?php
            echo "<div class='info-numbers'><span>{$bookingCount}</span></div>";
        ?>
              <div>Bookings</div>
            </div>

            <div class='info-box-footer'>

              <a href='booking details.php' class='user-href' style='color: #ff5256;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

        </div>
        


        <?php


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

// Function to display all bookings
function displayAllBookings($conn) {
    echo "<div class='newest-members'>
              <div style='width: -webkit-fill-available;' class='notifications'>
                <div class='notify-header'>
                <h2><i class='fa'>&#xf0c0;</i> All Bookings</h2>
                  <div class='action-holder'>
                  </div>
                </div>
                <div class='notify-box'>
                  <table id='customers'>
                    <tr>
                      <th>Status</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Bookings</th>
                    </tr>";

    // Retrieve all data from the bookings table
    $sql = "SELECT booking_date, name, email, category
            FROM bookings
            ORDER BY booking_date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['booking_date']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['category']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No bookings found.</td></tr>";
    }

    echo "</table>
          <div class='view-all-members'>
            <span class='view-all-btn1'><a href='booking details.php'>View All Members</a></span>
          </div>
        </div>
      </div>
    </div>";
}

// Display all bookings
displayAllBookings($conn);

// Close the connection
$conn->close();
?>
<script>
    function showAll() {
        // Code to show all details
        document.getElementById('fullDetails').style.display = 'block';
    }

    function showDetails() {
        // Code to show specific details
        // Add your logic here
    }
</script>


</section>
    </div>

  </div>