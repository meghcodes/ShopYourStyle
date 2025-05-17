<?php
// update_user.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['id'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newAddress = $_POST['address'];

    // Update user details in the database
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

    // Update user details
    $sql = "UPDATE users SET name='$newName', email='$newEmail', address='$newAddress' WHERE id=$userId";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();

    if ($result) {
        echo "User details updated successfully!";
    } else {
        echo "Error updating user details: " . $conn->error;
    }
} else {
    echo "Invalid request method";
}
?>
