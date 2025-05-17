<?php
// delete_user.php
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Delete user from the database
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

    // Delete user
    $sql = "DELETE FROM users WHERE id=$userId";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();

    if ($result) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "User ID not provided";
}
?>
