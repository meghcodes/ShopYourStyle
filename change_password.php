<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $newPassword = isset($_POST['new_password']) ? $_POST['new_password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    // Validate that new password and confirm password match
    if ($newPassword === $confirmPassword) {
        // Hash the new password before updating it in the database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the password in the database
        $sql = "UPDATE login SET password='$hashedPassword' WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result) {
            echo '<script>alert("Password changed successfully!");</script>';
        } else {
            echo '<script>alert("Error changing password: ' . $conn->error . '");</script>';
        }
    } else {
        echo '<script>alert("New password and confirm password do not match.");</script>';
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Add User - Shopyourstyle</title>

    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
}

.NavOne {
    background-color: #333;
    overflow: hidden;
}

.NavOne a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.NavOne a:hover {
    background-color: #ddd;
    color: black;
}

.admin-container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
    text-align: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="text"],
input[type="password"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>

<body>

    <!-- Include navigation bar -->
    <nav class="NavOne">
        <ul>
            <li><a id="back" href="Profile.php">Back</a></li>
            <li><a id="login" href="Login.php">Sign Out</a></li>
        </ul>
    </nav>

    <br><br><br><br>

    <main class="admin-container">
    <h1>Change Password</h1>
    <form action="change_password.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="new-password">New Password:</label>
        <input type="password" id="new-password" name="new_password" required>

        <label for="confirm-password">Confirm New Password:</label>
        <input type="password" id="confirm-password" name="confirm_password" required>

        <button type="submit">Change Password</button>
    </form>
    </main>

    <br><br><br><br>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>

</body>

</html>
