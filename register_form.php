<?php
include 'coonectdb.php'; // Include coonectdb.php for database connection

if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']); // Change from 'name' to 'username'
   $password = mysqli_real_escape_string($conn, $_POST['password']); // Change from 'password' to 'password'

   $select = "SELECT * FROM user WHERE username = '$username'"; // Change table name to 'users'
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'Username already exists!'; // Change error message
   } else {
      // Insert data into 'users' table
      $insert = "INSERT INTO user (username, password) VALUES ('$username','$password')"; // Change table name and column names
      if(mysqli_query($conn, $insert)){
         // Registration successful
         $success_message = 'Registration successful!';
      } else {
         $error[] = 'Registration failed!';
      }
   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="food.css">
   <style>
      body {
         background-color: orange;
         font-family: Arial, sans-serif;
      }
      .form-container {
         max-width: 300px;
         margin: 0 auto;
         background-color: black;
         padding: 20px;
         border-radius: 5px;
      }
      input[type="text"], input[type="email"], input[type="password"], input[type="submit"], select {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         box-sizing: border-box;
      }
      input[type="submit"] {
         background-color: orange;
         color: #fff;
         cursor: pointer;
      }
      input[type="submit"]:hover {
         background-color: #0056b3;
      }
      .error-msg, .success-msg {
         display: block;
         padding: 5px;
         margin-bottom: 10px;
         color: red;
      }
      .success-msg {
         color: orange;
      }
   </style>
</head>
<body>

   <div class="form-container">
      <form action="" method="post">
         <h3>Register Now</h3>
         <?php
         if(isset($error)){
            foreach($error as $error_msg){
               echo '<span class="error-msg">'.$error_msg.'</span>';
            };
         };
         if(isset($success_message)){
            echo '<span class="success-msg">'.$success_message.'</span>';
         }
         ?>
         <input type="text" name="username" required placeholder="Enter your username"> <!-- Change 'name' to 'username' -->
         <input type="password" name="password" required placeholder="Enter your password"> <!-- Change 'password' to 'password' -->
         <input type="submit" name="submit" value="Register Now">
         <p><span style="color: orange;"><a href="login_form.php" style="color: orange;">Login Now</a></p>

      </form>
   </div>

</body>
</html>
