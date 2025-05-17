<?php 
    include("connections.php");
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Car Booking</title>
</head>
<title>CarBooking.com</title>

<body>
    <header>
        <nav>
            <ul>
                <li><a id="home1" href="Home.html"></a></li>
                <li><a id="home" href="Home.html">Home</a></li>
                <li><a id="about" href="About.html">About</a></li>
                <li><a id="contact" href="Contact.html">Contact Us</a></li>
                <li><a id="services" href="Services.html">Services</a></li>
                <li><a id="login" href="Login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <br><br>

    <div class="main10">
        <form class="form1" action="function.php" method="POST">
            <h3>Login</h3>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required class="large-input"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required class="large-input"><br>
            <button class="simple-button" id="login-btn" type="submit" name="submit">Login</button>
            <button class="simple-button" id="registration-btn">Register</button>
            <p id="forgot-password"><a href="forgot.html">Forgot Password?</a></p>

            <script>
                document.getElementById('registration-btn').addEventListener('click', function () {
                    window.location.href = 'Register.php';
                });
            </script>
        </form>
    </div>

    <br><br><br><br>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="logo.png" alt="LuxeWheels Logo">
                <p>Your Trusted Source for Luxury Car Rentals</p>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Services.html">Services</a></li>
                    <li><a href="Contact.html"></a></li>
                    <li><a href="Contact.html"></a></li>
                    <li><a href="Contact.html"></a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <p>Contact Us:</p>
                <p>Email: info@luxewheels.com</p>
                <p>Phone: +1-800-LUXE-CAR</p>
            </div>
        </div>
        <div class="footer-social">
            <p>Follow Us:</p>
            <a href="#" class="social-icon"><img src="facebook_icon.png" alt="Facebook"></a>
            <a href="#" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#" class="social-icon"><img src="instagram-icon.svg" alt="Instagram"></a>
        </div>
    </footer>
</body>

</html>