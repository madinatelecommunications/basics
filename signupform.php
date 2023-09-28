<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <form class="signup-form" id="signup-form" method="post">
            <h2>Sign Up</h2>
            <input type="text" name="Fullname" placeholder="Full Name" class="input-field" required>
            <input type="email" name="Email"  placeholder="Email" class="input-field" required>
            <input type="password" name="Password" placeholder="Password" class="input-field" required>
             <input type="date" name="DateofBirth" placeholder="Date of Birth" class="input-field" id="inputdate" required>
             <input type="text" name="ContactNumber" placeholder="Contact Number" class="input-field">
            <button type="submit" name="sbtn" class="submit-button">Sign Up</button>
        <p class="toggle-form">Already have an account? <a href="signinform.php" >Sign In</a></p>   
        <p class="toggle-form1"><a href="main.php" >Home</a></p>            
        </form>

       
    </div>
    <script src="script.js"></script>
</body>
</html>



<style>/* Reset some default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
    }

    a{
        text-decoration: none;
    }
    /* .toggle-form1{
        font-size:48px;
    } */

    .signup-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f5f5f5;
    }
    
    .signup-form {
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
    
</style>


<!-- <script>
document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // You can add your desired functionality here, such as sending the form data to a server

    alert("Sign up successful!"); // Display a simple alert for demonstration
    


});

</script> -->

<?php
$con=mysqli_connect("localhost","root","","codetoday");
if(isset($_POST['sbtn']))
{
mysqli_query($con, "insert into users(Fullname, Email, Password, DateofBirth, ContactNumber) values ('".$_POST['Fullname']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['DateofBirth']."','".$_POST['ContactNumber']."')");

echo "Signup Successfully!";
}
?>

