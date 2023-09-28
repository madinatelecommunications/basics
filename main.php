<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Home Page</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="dashboard.php">CodeToday</a>
        </div>
        <ul class="nav-links">
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li> -->
        </ul>
        <div class="auth-links">
            <a href="#" id="login1">Login</a>
            <a href="#" class="signup" id="sign1">Sign Up</a>
        </div>
    </nav>
    <div class="content">
        <h1>Welcome to Code Today!</h1>
        <p>Your one-stop destination for amazing content.</p>
    </div>

   
</body>
</html>
            <style>
          


            /* Reset some default styles */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                background-color:whitesmoke;
            }

            /* Navbar Styles */
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
            }

            .logo a {
                font-size: 1.5rem;
                color: #fff;
                text-decoration: none;
            }

            .nav-links {
                list-style: none;
                display: flex;
            }

            .nav-links li {
                margin-right: 20px;
            }

            .nav-links a {
                color: #fff;
                text-decoration: none;
            }

            .auth-links a {
                margin-left: 20px;
                color: #fff;
                text-decoration: none;
            }

            /* Content Styles */
            .content {
                text-align: center;
                padding: 50px;
            }

            .content h1 {
                font-size: 2.5rem;
                margin-bottom: 10px;
            }

            .content p {
                font-size: 1.2rem;
            }
            </style>

<script>

document.getElementById("login1").addEventListener("click",function(){

// Generate the URL for the new page using PHP
    var dynamicURL = "signinform.php?param=value";

 // Open the new page in a new window
    var newWindow = window.open(dynamicURL, "_blank");

})

document.getElementById("sign1").addEventListener("click", function(){

    
// Generate the URL for the new page using PHP
var dynamicURL = "signupform.php?param=value";

// Open the new page in a new window
   var newWindow = window.open(dynamicURL, "_blank");

})



</script>

<?php
require_once('footer.php');
?>