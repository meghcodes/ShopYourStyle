<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Shopyourstyle</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #007bff;
            text-align: center;
        }

        .user-profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-profile img {
            width: 150px; 
            height: 150px; 
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-info {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .order-history {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .wishlist,
        .settings {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .order-history h2,
        .wishlist h2,
        .settings h2 {
            color: #007bff;
        }

        .profile img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .user-profile label {
            cursor: pointer;
        }

        .user-profile label:hover {
            opacity: 0.8;
        }

        .editable-field input {
            display: none;
        }

        .editable-field {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .editable-field .edit-mode {
            display: none;
        }

        .editable-field .view-mode button {
            margin-top: 10px;
        }

        .editable-field .edit-mode input {
            display: inline-block;
        }

        .editable-field .edit-mode button {
            display: inline-block;
        }

    </style>

</head>

<body>

    <nav class="NavOne">
        <ul>
            <li><a id="home" href="Home_2.html">Home</a></li>
            <li><a id="about" href="About_2.html">About</a></li>
            <li><a id="contact" href="Contact_2.html">Contact</a></li>
            <li><a id="login" href="Login.php">Sign Out</a></li>
        </ul>
    </nav>

    <br><br><br><br>

    <main class="containerFour">
        <div class="container">
            <h1>User Profile</h1>
            
            <div class="user-profile">
                <label for="profile-picture-upload">
                    <input type="file" id="profile-picture-upload" style="display: none;" onchange="previewProfilePicture(event)">
                    <img src="Profile1.jpeg" alt="Profile Picture" id="profile-picture">
                    <div class="editable-field">
                        <div class="view-mode" id="user-name-view">
                            <h2>Virat Kohli</h2>
                        </div>
                        <div class="edit-mode" id="user-name-edit">
                            <input type="text" id="user-name-input">
                            <button onclick="saveUserName()">Save</button>
                        </div>
                    </div>
                </label>
            </div>

            <div class="order-history">
    
        <div class="profile">
            <div class="order-history">
                <h2>Order History</h2>
                <p>
                    <strong>Order #1:</strong>
                    <img src="image1.jpeg" alt="Product A">
                    Product A - $20 (Shipped)
                </p>
                <p>
                    <strong>Order #2:</strong>
                    <img src="image2.webp" alt="Product B">
                    Product B - $30 (Processing)
                </p>
                <p>
                    <strong>Order #3:</strong>
                    <img src="image3.webp" alt="Product C">
                    Product C - $25 (Delivered)
                </p>
                <p>
                    <strong>Order #4:</strong>
                    <img src="image4.webp" alt="Product D">
                    Product D - $40 (Pending)
                </p>
            </div>

            <div class="wishlist">
                <h2>Wishlist</h2>
                <p>
                    <img src="image10.webp" alt="Product X">
                    Product X - $15
                </p>
                <p>
                    <img src="image15.webp" alt="Product Y">
                    Product Y - $25
                </p>
                <p>
                    <img src="image18.webp" alt="Product Z">
                    Product Z - $30
                </p>
                <button>Add to Wishlist</button>
                <button>Remove from Wishlist</button>
            </div>
    </div>

            <div class="user-info">
                <h2>User Information</h2>
                <p><strong>Name:</strong> Virat Kohli</p>
                <p><strong>Email:</strong> virat@gmail.com</p>
                <p><strong>Address:</strong> 123 Main St, City, Country</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Joined:</strong> January 1, 2022</p>
            </div>

        <div>
            <div class="settings">
                <h2>Account Settings</h2>
                <button onclick="enterEditMode('user-name')">Edit Profile</button>
                <button id="change-password" onclick="location.href='./change_password.php'">Change Password</button>
                <button>Notification Preferences</button>
                <button>Delete Account</button>
            </div>
        </div>
    </main>

    <br><br><br><br>

    <footer class="bg-gray-900 text-white text-center py-2">
        <p>&copy; 2023 Shopyourstyle</p>
    </footer>

    <script>
        function previewProfilePicture(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function () {
                var img = document.getElementById('profile-picture');
                img.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>

    <script>
        function enterEditMode(fieldId) {
            var viewMode = document.getElementById(fieldId + '-view');
            var editMode = document.getElementById(fieldId + '-edit');

            viewMode.style.display = 'none';
            editMode.style.display = 'inline-block';
            document.getElementById('user-name-input').value = viewMode.querySelector('h2').innerText;
        }

        function saveUserName() {
            var viewMode = document.getElementById('user-name-view');
            var editMode = document.getElementById('user-name-edit');

            viewMode.querySelector('h2').innerText = document.getElementById('user-name-input').value;

            viewMode.style.display = 'inline-block';
            editMode.style.display = 'none';
        }

        function previewProfilePicture(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function () {
                var img = document.getElementById('profile-picture');
                img.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>

</body>

</html>
