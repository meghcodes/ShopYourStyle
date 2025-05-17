<?php
    include("connections.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the entered credentials are for Admin
        if ($username === 'Admin' && $password === 'admin@12') {
            header("Location: Admin.php");
            exit();
        }

        // If not Admin, check in the database
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            header("Location: Profile.php");
            exit();
        } else {
            echo '<script>
                window.location.href = "Login.php";
                alert("Login Failed: Invalid Username or Password");
            </script>';
        }
    }
?>
