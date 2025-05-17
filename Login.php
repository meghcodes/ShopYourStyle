<?php 
    include("connections.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Shopyourstyle</title>
</head>
<body>

    <nav class="NavOne">
        <ul>
            <li><a id="home" href="Home.html">Home</a></li>
            <li><a id="about" href="About.html">About</a></li>
            <li><a id="contact" href="Contact.html">Contact</a></li>
            <li><a id="login" href="Login.php">Login</a></li>
        </ul>
    </nav>

    <header class="bg-gray-900 text-white text-center py-4">
        <h1 class="text-4xl font-bold">Shopyourstyle</h1>
    </header>

    <nav class="NavTwo">
        <ul>
            <br>
            <br>
            <br>
        </ul>
    </nav>

    <main class="containerThree">
        <section>
            <br><br>
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
            
            <div class="login-container">
                <form action="function.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button id="login-btn" class="simple-button" type="submit" name="submit">Login</button>
                </form>
                <p>Don't have an account? <a id="signup-btn" href="SignUp.php">Sign Up</a></p>
            </div>
            <br><br>
        </section>
    </main>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>
</body>
</html>
