
<?php  ?><!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" type="text/css" href="style.css">
    <title>Delivery Page</title>
</head>
<body>
    <h1>Delivering to your specific location in less than 25minutes. </h1>
    <h2>THANK YOU FOR ORDERING WITH FOODHUB</h2>
    <div id="delivery-location"></div>
<style>
    body{
        background-color: orange;
    }
</style>
    <script>
        // Function to extract location from URL query parameter
        function getLocationFromURL() {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('location');
        }

        // Update the delivery location content
        var deliveryLocation = getLocationFromURL();
        document.getElementById("delivery-location").innerText = deliveryLocation;
    </script>
</body>
</html>

