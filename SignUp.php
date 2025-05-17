<?php
         include("connections.php");
         include("function.php");
     
         if($_SERVER['REQUEST_METHOD'] == "POST")
         {
             $username = $_POST['username'];
             $password = $_POST['password'];
     
             if(!empty($username) && !empty($password) && !is_numeric($username)){
     
                 $query = "insert into login (username, password) values ('$username', '$password')";
     
                 mysqli_query($conn, $query);
     
                 header('Location:Login.php');
                 die;
             }else{
                 echo'Enter Valid Information';
             }
            }
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
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Login.php">Login</a></li>
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
            <h2 class="text-2xl font-semibold mb-4">Sign Up</h2>
            
            <div class="login-container">
                <form action="SignUp.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button id="signup" class="simple-button" type="submit">Sign up</button>
                </form>
                <p>Already have an account? <a href="Login.php">Login</a></p>
            </div>
            <br><br>
        </section>
    </main>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>
</body>
</html>
