<?php
// add_user.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $newName = isset($_POST['name']) ? $_POST['name'] : '';
    $newEmail = isset($_POST['email']) ? $_POST['email'] : '';
    $newAddress = isset($_POST['address']) ? $_POST['address'] : '';

    // Insert new user into the database
    $sql = "INSERT INTO users (name, email, address) VALUES ('$newName', '$newEmail', '$newAddress')";
    $result = $conn->query($sql);

    if ($result) {
        echo "<script>alert('User added successfully!');</script>";
    } else {
        echo "Error adding user: " . $conn->error;
    }
}

// Close the database connection
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
        /* Style.css */

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
input[type="email"],
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
            <li><a href="Admin.php">Back</a></li>
            <li><a href="Login.php">Sign Out</a></li>
        </ul>
    </nav>

    <br><br><br><br>

    <main class="admin-container">
        <h1>Add User</h1>

        <!-- User Input Form -->
        <form action="add_user.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br>

            <input type="submit" value="Add User">
        </form>
    </main>

    <br><br><br><br>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>

</body>

</html>
