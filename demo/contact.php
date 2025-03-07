<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DORA Photography</title>
    <link rel="icon" href="./Images/logo.jpg" type="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script><style>
                .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            margin-left: -16px;
            display: block;
            width: 32px;
            height: 32px;
            border: 2px solid #FFF;
            background-size: 14px auto;
            border-radius: 50%;
            z-index: 2;
            opacity: 1;
            transition: all .5s ease-in 3s;
            animation: bounce 2s infinite 2s;
        }

        .scroll-down:before {
            position: absolute;
            top: calc(50% - 8px);
            left: calc(50% - 6px);
            transform: rotate(-45deg);
            display: block;
            width: 12px;
            height: 12px;
            content: "";
            border: 2px solid white;
            border-width: 0px 0 2px 2px;
        }

        @keyframes bounce {
            0%, 100%, 20%, 50%, 80% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
            </style>
             <style>
                .loader-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it's above other elements */
}

.loader {
    border: 8px solid #f3f3f3;
    border-top: 8px solid #3498db; /* Loader color */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
            </style>
</head>

<body>
<div class="loader-container">
    <div class="loader"></div>
</div>
    <!-- header -->
<header class="header">
    <div class="nav-section">
        <div class="brand-and-navBtn">
            <img src="images/blog.png" alt="DORALAB Logo" class="-logo">
            <span class="navBtn flex">
                <i class="fas fa-bars"></i>
            </span>
        </div>
        <style>
            .-logo {
    width: 200px; /* Set your desired width */
    height: auto; /* Set your desired height */
    margin-right: 10px;
    margin-left: 1200px;
    margin-top: 160vh; /* Adjust spacing as needed */
    position: fixed;
}

.navBtn {
    cursor: pointer;
    font-size: 24px; /* Set your desired font size */
}

/* Responsive styles for smaller screens */
@media (max-width: 768px) {
    .brand-and-navBtn {
        flex-direction: column;
        align-items: flex-start;
    }

    .-logo {
        margin-bottom: 10px; /* Adjust spacing as needed */
    }
}
        </style>

            <!-- navigation menu -->
            <nav class="top-nav">
                    <ul>
                        <li><a href = "index 1.php">Home</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "blog.php">Videos</a></li>
                        <li><a href = "contact.php"class = "active">Contact</a></li>
                        <li><a href = "bookings.php">Bookings</a></li>
                    </ul>
            </nav>
            <span class="">
                <i class=""></i>
            </span>
        </div>

        <div class="container about">
            <div class="about-content">
                <div class="about-img flex">
                    <img src=".\Images\Logo.jpg" alt="photographer img">
                </div>
                <h2>Dora Photography</h2>
                <h3>Photography | Videography</h3>
                <blockquote>
                    "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                    <span>DORALAB</span>
                </blockquote>
            </div>
        </div>
        <div class="scroll-down" address="true"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('.scroll-down').addEventListener('click', function () {
                document.documentElement.scrollTop = document.querySelector('section.ok').offsetTop;
            });
        });
    </script>
        <div class="scroll-btn" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
        <style>
            .scroll-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: #fff;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    display: none; /* Initially hide the button */
}

.scroll-btn:hover {
    background-color: #0056b3;
}
        </style>
        <script>
            function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

        </script>
    </header>
    <!-- end of header -->

    <!-- main -->
    <section class="section-five">
        <div class="container">
            <div class="contact-top">
                <h3>CONTACT ME</h3>
                <p>Hello, it's really a pain to be followed. It will follow, for us.</p>
            </div>

            <div class="contact-middle">
          
                <div>
                    <span class="contact-icon">
                        <i class="fas fa-map-signs"></i>
                    </span>
                    <span>Address</span>
                    <p>Muvendhar illam, Chellamuthu Nagar, Zamin Uthukuli, Pollachi, Tamil Nadu 642006</p>
                </div>

                <div>
                    <span class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </span>
                    <span>Contact Number</span>
                    <p>+91 6369143067</p>
                </div>

                <div>
                    <span class="contact-icon">
                        <i class="fas fa-paper-plane"></i>
                    </span>
                    <span>Email Address</span>
                    <p>sathish2222k0150@gmail.com</p>
                </div>

                <div>
                    <span class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </span>
                    <span>Website</span>
                    <p>www.DORALAB.com</p>
                </div>
            </div>
            <div class="contact-bottom">
                <!-- Corrected the structure: Removed the inner form -->
                <form action="contact.php" method="post" class="form" enctype="multipart/form-data">
                    <input type="hidden" name="update_id" id="update_id">
                    <input type="hidden" name="delete_id" id="delete_id">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" rows="9" placeholder="Message" required></textarea>
                    <input type="submit" class="btn" value="Send Message">
                </form>

                <!-- Map -->
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7842.12301643536!2d76.97149157524109!3d10.65232975108974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba839d84525d839%3A0xe773ef03c2ff924b!2sDoraphotography-Professional%20Photographer!5e0!3m2!1sen!2sin!4v1704878759430!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end of main -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer-container container">
            <div>
                <style>/* Resetting some default styles */
body {
    margin: 0;
    padding: 0;
}

/* Footer Styles */
.footer {
    background-color: black; /* Change the background color as needed */
    color: #fff; /* Text color */
    padding: 20px 0; /* Adjust the padding as needed */
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.footer h2 {
    color: #fff; /* Heading color */
}

.footer p {
    font-size: 14px; /* Adjust font size as needed */
    line-height: 1.5; /* Adjust line height as needed */
}

/* Bottom copyright text */
.footer p:last-child {
    margin-top: 20px; /* Add space between the content and the copyright text */
}

/* Optional: Add some styles to make it visually appealing */
.footer-container > div {
    width: 50%;
}

/* Media query for responsiveness - adjust as needed */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }

    .footer-container > div {
        width: 100%;
        margin-bottom: 20px;
    }
}
</style>
                <h2>Dora Photography</h2>
                <p>The company itself is a very successful company. Or blinded by the least wisdom, for the free choice of the way of life of the soul, who flees from the comforts of the present, as if he receives no forgiveness from us unless we lead him astray into pains and pleasures.</p>
            </div>
            
        </div>
        <p>&copy;  DORALAB </p>
    </footer>
    <!-- end of footer -->


    <script src="script.js"></script>
    <script>
    // Add this code at the beginning of your existing script or create a new <script> tag.

document.addEventListener('DOMContentLoaded', function () {
    // Show loader while the content is loading
    document.querySelector('.loader-container').style.display = 'flex';

    // After the content is loaded, hide the loader
    window.addEventListener('load', function () {
        document.querySelector('.loader-container').style.display = 'none';
    });

    // Your existing code...

    // The rest of your existing code...
});

</script>
    <script>
    window.onscroll = function () {
        showScrollButton();
    };

    function showScrollButton() {
        var scrollButton = document.querySelector('.scroll-btn');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollButton.style.display = 'block';
        } else {
            scrollButton.style.display = 'none';
        }
    }
</script>   
    <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sample"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include PHPMailer
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messageContent = $_POST["message"];
    $created_at = date("Y-m-d H:i:s");

    // Check if the form is submitted for update
    $updateId = $_POST["update_id"];
    if (!empty($updateId)) {
        // Prepare and bind the update query with placeholders
        $updateQuery = $conn->prepare("UPDATE contact_messages 
                                       SET name=?, email=?, subject=?, message=? 
                                       WHERE id=?");
        $updateQuery->bind_param("ssssi", $name, $email, $subject, $messageContent, $updateId);

        // Set parameters and execute the update query
        if ($updateQuery->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $updateQuery->error;
        }

        $updateQuery->close(); // Close the prepared statement
        exit; // Exit to prevent further execution of the insert code
    }

    // Check if the form is submitted for delete
    $deleteId = $_POST["delete_id"];
    if (!empty($deleteId)) {
        $deleteQuery = "DELETE FROM contact_messages WHERE id=$deleteId";

        if ($conn->query($deleteQuery) === TRUE) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        exit; // Exit to prevent further execution of the insert code
    }

    // Insert data into contact_messages table
    $insertQuery = "INSERT INTO contact_messages (name, email, subject, message, created_at) 
                    VALUES ('$name', '$email', '$subject', '$messageContent', '$created_at')";
                    
    if ($conn->query($insertQuery) === TRUE) {
        // Email details
        $to = $email;
        $adminEmail = "sathish2222k0150@gmail.com"; // Replace with your admin email
        $subject = "New Message";

        // Message to user
        $userMessage = "Thank you for your message! ";

        // Message to admin
        $adminMessage = "New message received from $name. Details:<br><br>
                        <strong>Name:</strong> $name<br>
                        <strong>Email:</strong> $email<br>
                        <strong>Subject:</strong> $subject<br>
                        <strong>Message:</strong> $messageContent<br>
                        <strong>Created At:</strong> $created_at";

        // Initialize PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'sathish2222k0150@gmail.com';  // Replace with your email address
        $mail->Password = ' kwqj wsxp vhpw fvvk';  // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        // Set email details
        $mail->setFrom('sathish2222k0150@gmail.com', 'Dora_Photography'); // Replace with your email and name
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $userMessage;

        // Send email to user
        if ($mail->send()) {
            // Message to admin
            $mail->clearAddresses();
            $mail->addAddress($adminEmail);
            $mail->Body = $adminMessage;

            // Send email to admin
            if ($mail->send()) {
                echo "Message sent successfully.";
            } else {
                echo "Error sending email to admin: " . $mail->ErrorInfo;
            }
        } else {
            echo "Error sending email to user: " . $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


</body>

</html>
