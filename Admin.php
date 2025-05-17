<?php

include_once 'edit_user.php';
include_once 'delete_user.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newAddress = $_POST['address'];

    // Insert new user into the database
    $sql = "INSERT INTO users (name, email, address) VALUES ('$newName', '$newEmail', '$newAddress')";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();

    if ($result) {
        echo "User added successfully!";
    } else {
        echo "Error adding user: " . $conn->error;
    }
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Admin Dashboard - Shopyourstyle</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Add your existing styles here */

        .admin-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .admin-section {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .admin-container h1{
            text-align: center;
        }

        .admin-container h2{
            text-align: center;
        }

        .admin-section h2 {
            color: #007bff;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .admin-table th, .admin-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .chart-container {
            width: 100%;
            height: 425px;
            margin-top: 20px;
        }

        .btn_adduser_container{
            text-align: center;
        }

        button.btn_adduser {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button.btn_adduser:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <!-- Include navigation bar -->
    <nav class="NavOne">
        <ul>
            <li><a href="Home_2.html">Home</a></li>
            <li><a href="About_2.html">About</a></li>
            <li><a href="Contact_2.html">Contact</a></li>
            <li><a href="Login.php">Sign Out</a></li>
        </ul>
    </nav>

    <br><br><br><br>

    <main class="admin-container">
        <h1>Admin Dashboard</h1>
        <h2>Welcome Admin</h2>

        <!-- Sales Statistics -->
        <div class="admin-section">
            <h2>Sales Statistics</h2>

            <!-- Bar Chart Container -->
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>

            <!-- Data Table -->
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Sales (Dollars)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Men's Clothing</td>
                        <td>
                            <span id="menSales" contenteditable="true" onblur="updateSales('menSales')">50000</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Women's Clothing</td>
                        <td>
                            <span id="womenSales" contenteditable="true" onblur="updateSales('womenSales')">75000</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Kids' Clothing</td>
                        <td>
                            <span id="kidsSales" contenteditable="true" onblur="updateSales('kidsSales')">30000</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Monthly Traffic Line Chart -->
        <div class="admin-section">
            <h2>Monthly Traffic</h2>

            <!-- Line Chart Container -->
            <div class="chart-container">
                <canvas id="trafficChart"></canvas>
            </div>

            <!-- Data Table (Placeholder) -->
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Traffic</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>January</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>1500</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <!-- Seasonal Reports -->
        <div class="admin-section">
            <h2>Seasonal Reports</h2>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Sales (Dollars)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2021</td>
                        <td>$550,000</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>$875,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- User Growth Statistics -->
        <div class="admin-section">
            <h2>User Growth Statistics</h2>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Number of Users</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2021</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Yet to finalize</td>
                    </tr>
                </tbody>
            </table>
        </div>

<!-- User Details Table -->
<div class="admin-section">
    <h2>User Details</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No user data available</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br><br>
        <div class="btn_adduser_container">
            <button class="btn_adduser" onclick="location.href='./add_user.php'">Add User</button>
        </div>
</div>

    </main>

    <br><br><br><br>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>

    <script>
        // JavaScript for Chart.js
        document.addEventListener('DOMContentLoaded', function () {
            // Declare salesChart in a scope accessible to the updateSales function
            var salesChart;
            
            // Function to update sales data
            window.updateSales = function (category) {
                var newValue = document.getElementById(category).innerText;

                // Update the corresponding data in the chart
                switch (category) {
                    case 'menSales':
                        salesChart.data.datasets[0].data[0] = newValue;
                        break;
                    case 'womenSales':
                        salesChart.data.datasets[0].data[1] = newValue;
                        break;
                    case 'kidsSales':
                        salesChart.data.datasets[0].data[2] = newValue;
                        break;
                    default:
                        break;
                }

                // Update the chart
                salesChart.update();
            };

            // Create the initial chart
            var ctx = document.getElementById('salesChart').getContext('2d');
            salesChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Men\'s Clothing', 'Women\'s Clothing', 'Kids\' Clothing'],
                    datasets: [{
                        label: 'Sales (Dollars)',
                        data: [50000, 75000, 30000],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 205, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 205, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
   
        </script>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data for the line chart (monthly traffic)
            var monthlyTrafficData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Monthly Traffic',
                    data: [1000, 1500, 1200, 2000, 1800, 2500, 3000, 2800, 3200, 4000, 3800, 4500],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            };

            // Line chart options
            var lineChartOptions = {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Traffic'
                        }
                    }
                }
            };

            // Create the line chart
            var trafficChartCanvas = document.getElementById('trafficChart').getContext('2d');
            var trafficLineChart = new Chart(trafficChartCanvas, {
                type: 'line',
                data: monthlyTrafficData,
                options: lineChartOptions
            });
        });
    </script>
</body>

</html>
