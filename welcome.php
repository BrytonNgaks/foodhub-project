<?php  ?>
<!DOCTYPE html>
<html>
<head>
    <title>FOODHUB.COM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: orange;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        header {
            text-align: center;
            margin-top: 50px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-top: 0;
        }

        .container label {
            font-weight: bold;
        }

        .container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>  
    <nav>
        <ul>
             <li><a class="active" href="indexs.php">LOGIN</a></li>
        
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactusfooddemo.php">Contact Us</a></li>
        </ul>
    </nav>
    <header>
        <h1>WELCOME TO THE BEST RESTAURANT IN KENYA</h1>
        <img src="https://static.takeaway.com/images/restaurants/bg/01O03511/logo_465x320.png" alt="Restaurant Logo">
    </header>
    <div class="container">
        <h2>Address Validation</h2>
        <p>Please enter your address:</p>
        <hr>
        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter your address" id="address" required>
        <button onclick="validateAddress()">Submit</button>
    </div>

    <script>
        function validateAddress() {
            const address = document.getElementById("address").value;
            if (address.trim() === "") {
                alert("Address must be filled out");
            } else {
                window.location.href = "foodmenu.php";
            }
        }
    </script>
</body>
</html>
