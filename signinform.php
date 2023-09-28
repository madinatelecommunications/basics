<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Sign In</title>
</head>

<body>
    <div class="signin-container">

            <form class="signin-form" method="post" >
            <h2>Sign In</h2>
                <input type="text" placeholder="Username" class="input-field" name="email">
                <input type="password" placeholder="Password" class="input-field" name="password">
                <button type="submit" class="submit-button" name="btn">Sign In</button>
                <br>
                <p class="toggle-form">Don't have an account? <a href="signupform.php">Sign Up</a></p>
            </form>
            
    </div>
</body>

</html>



<!-- Css Part of Design starts here -->
    
<style>
        /* Reset some default styles */
        * {
            margin:0;   
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Responsive Styles for the Sign In Form */
        .signin-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
            background-color:whitesmoke;
            
        }

        .signin-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }


        /* Responsive Breakpoints */
        @media screen and (max-width: 600px) {
            .signin-form {
                padding: 15px;
            }
        }
</style>

<?php

if(isset($_POST['btn']))
{
$con=mysqli_connect("localhost","root","","codetoday");
$records=mysqli_query($con,"select * from users where email='".$_POST['email']."' && password='".$_POST['password']."'" );

$r=mysqli_num_rows($records);

if($r==1){
    session_start();
$_SESSION['email']=$_POST['email'];
header("location:dashboard.php");
}
else
{
    echo "Invalid user credentials";  
}
}
?>