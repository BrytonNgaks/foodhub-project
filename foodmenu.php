<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="style.css">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #orange;
        }
        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }
        .container {
           max-width: 100000px;
            margin: 0px auto;
            padding: 0 20px;
            background-color: black;
        }
        .menu-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            overflow: visible;
            cursor: pointer;
        }
        .menu-item img {
            width: 15%;
            display: block;
            height: 15%;
        }
        .menu-item .info {
            padding: 20px;
        }
        .menu-item h2 {
            margin-top: 0;
        }
        .menu-item p {
            margin-bottom: 5px;
        }
        .menu-item .category {
            font-style: italic;
            margin-bottom: 10px;
        }
        .menu-item .allergens {
            color: #c00;
            font-weight: bold;
        }
        #submitOrderBtn {
    background-color: black;
    color: orange;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

#submitOrderBtn:hover {
    background-color: orange;
    color: black;
}

    </style>
</head>
<body>

    <header>
        <h1>Restaurant Menu</h1>
    </header>
    <div class="container">
        <div class="menu-item" onclick="orderFood('Special Dish 1')">
            <img src="C:\Users\user\Documents\xampp\htdocs\project\WhatsApp Image 2024-03-25 at 11.08.40_4c5f5109.jpg">
            <div class="info">
                <h2>Special Dish 1</h2>
                <p class="category">Specialties</p>
                <p>Description of the special dish goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p><span class="allergens">Contains: Gluten</span></p>
                <p>$10.99</p>
            </div>
        </div>
        <div class="menu-item" onclick="orderFood('Special Dish 2')">
            <img src="C:\Users\user\Documents\Web Development\structure.html\web project food hub\download(2).jpeg.jpg" alt="Special Dish 2">
            <div class="info">
                <h2>Special Dish 2</h2>
                <p class="category">Specialties</p>
                <p>Description of the special dish goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p><span class="allergens">Contains: Dairy</span></p>
                <p>$12.99</p>
            </div>
        </div>
        <div class="menu-item" onclick="orderFood('Chicken Alfredo')">
            <img src="https://th.bing.com/th/id/OIP.AaMdGlJqLDa6ibQeT-3pFQHaLH?w=195&h=292&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Chicken Alfredo" width="10%">

            <div class="info">
                <h2>Chicken Alfredo</h2>
                <p class="category">Pasta</p>
                <p>Classic chicken alfredo with creamy sauce and parmesan cheese.</p>
                <p>$14.99</p>
            </div>
        </div>
        <div class="menu-item" onclick="orderFood('Grilled Salmon')">
            <img src="https://th.bing.com/th?id=OSK.46ae2311a45628075774d33eda5e73d0&w=176&h=264&rs=2&qlt=80&o=6&cdv=1&dpr=1.5&pid=16.1" alt="Grilled Salmon" width=20%>
            <div class="info">
                <h2>Grilled Salmon</h2>
                <p class="category">Seafood</p>
                <p>Fresh grilled salmon served with roasted vegetables.</p>
                <p>$16.99</p>
            </div>
        </div>
        <div class="menu-item" onclick="orderFood('Margherita Pizza')">
            <img src="https://th.bing.com/th/id/OIP.980GqsRwoZjg94qTuVdBZwHaJ_?w=195&h=263&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Margherita Pizza" width=5%>
            <div class="info">
                <h2>Margherita Pizza</h2>
                <p class="category">Pizza</p>
                <p>Classic Italian pizza with fresh tomatoes, mozzarella, and basil.</p>
                <p>$11.99</p>
            </div>
        </div>
            <div class="menu-item" onclick="orderFood('Classic Cheeseburger')">
    <img src="https://th.bing.com/th/id/OIP.4ZEvGCrvb2HT_YYUEquYPgHaE8?w=252&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Classic Cheeseburger" width="5%">
    <div class="info">
        <h2>Classic Cheeseburger</h2>
        <p class="category">Burger</p>
        <p>A classic cheeseburger with lettuce, tomato, onion, pickles, and your choice of cheese.</p>
        <p>$8.99</p>
    </div>
</div>

        </div>
       
        </div>
        <!-- Add more menu items here if needed -->
    </div>
    <button id="submitOrderBtn">Submit Order</button>

<script>
document.getElementById("submitOrderBtn").addEventListener("click", function() {
    // Display confirmation message
    var confirmation = confirm("Done with ordering?");
    if (confirmation) {
        // Redirect to delivery.html
        window.location.href = "delivery.php";
    }
});
</script>
<nav>
        <ul>
             <li><a class="active" href="welcome.php">Home</a></li>
        <li><a href="foodmenu.php">Menu</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactusfooddemo.php">Contact Us</a></li>
        </ul>
    </nav>
    <script>
    function orderFood(foodName) {
    var quantity = prompt("How many " + foodName + " do you want?");
    if (quantity !== null && !isNaN(quantity) && quantity !== "") {
        var addToCart = confirm("Would you like to add " + quantity + " " + foodName + " to your cart?");
        if (addToCart) {
            // Do something here, such as adding the item to a cart object
            alert(quantity + " " + foodName + " added to cart!"); // For demonstration purposes, just show an alert
        }
    }
}


    </script>
</body>
</html>

