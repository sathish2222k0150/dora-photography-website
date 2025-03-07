<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DORA Photography </title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="icon" href="Images/logo.jpg" type="icon">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
	<body>
        
   <style>
        body {
            background-color: #000;
            margin: 0;
            padding: 0;
        }

        .container.about {
            display: table;
            height: 100vh;
            width: 100%;
        }

        .about-content {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

       

        blockquote {
            margin-top: 20px;
        }

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
            <img src="images/home.png" alt="DORALAB Logo" class="-logo">
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
                        <li><a href = "index 1.php"class = "active">Home</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "blog.php">videos</a></li>
                        <li><a href = "contact.php">Contact</a></li>
                        <li><a href = "Bookings.php">Bookings</a></li>
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
    </div>
    </header>
    <!-- end of header -->

    <!-- main -->
    <section class="section-one">
        <div class="container">
            <div class="sec-one-left">
                <!-- image here -->
                <div>
                    <h3>The customer is very happy</h3>
                    <p>The company itself is a very successful company. It takes the most worthy to get something from him. He repels, for troubles are to be repelled by perspicuous flattery.</p>
                    <a href="#" class="btn">view all</a>
                </div>
            </div>

            <div class="sec-one-right">
                <div class="work-content">
                    <h3>AMAZING TEAM WORK WITH PROFESSIONAL PHOTOGRAPHER</h3>
                    <p>The company itself is a very successful company. And we lead the laborious easy of repudiation, nor less in the corrupt result, that he may please him, for he may indeed be freed from pains, and that his chosen one may never seek all those who were born free from their needs, and abandon him to the just. Modes, untied ones.</p>
                    <a href="#" class="btn">view all</a>
                </div>
                <div class="work-imgs">
                    <div class="work-img-1">
                        <!--image here-->
                    </div>
                    <div class="work-img-2">
                        <!-- image here -->
                    </div>
                </div>
                <h3>"Taking an image, freezing a moment, reveals how rich reality truly is."</h3>
            </div>
        </div>
    </section>

    <section class="section-two">
    <div class="insta-imgs">
    <div>
        <a href="https://www.instagram.com/dora_photography_____/" target="_blank">
            <img src="Images/insta-1.jpeg">
            <div class="icon-overlay flex">
                <i class="fab fa-instagram"></i>
            </div>
        </a>
    </div>
    <div>
        <a href="https://www.instagram.com/dora_photography_____/" target="_blank">
            <img src="Images/insta-2.jpeg">
            <div class="icon-overlay flex">
                <i class="fab fa-instagram"></i>
            </div>
        </a>
    </div>
    <div>
        <a href="https://www.instagram.com/dora_photography_____/" target="_blank">
            <img src="Images/insta-3.jpeg">
            <div class="icon-overlay flex">
                <i class="fab fa-instagram"></i>
            </div>
        </a>
    </div>
    <div>
        <a href="https://www.instagram.com/dora_photography_____/" target="_blank">
            <img src="Images/insta-4.png">
            <div class="icon-overlay flex">
                <i class="fab fa-instagram"></i>
            </div>
        </a>
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
</body>
</html>
