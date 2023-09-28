<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
</head>
<style type="text/css">
        /* Basic styling for the dashboard */
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;

                }

                h2 {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                .container {    
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        background-color: #f5f5f5;
                        margin-left: 300px;

                    }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
    }

        label {
            font-weight: bold;
            margin-bottom: 5px;

        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
              background-color: #0056b3;
        }
    </style>
<body>

    <?php require_once("header.php") ?>
    <?php require_once("dashboard.php") ?>

<!-- input form start -->
    
<div class="container">
        
        <form method="post">

            <h2>Add User</h2>
            <input type="text" name="Fullname" placeholder="Full Name" class="input" required>
            <input type="email" name="Email"  placeholder="Email" class="input" required>
            <input type="password" name="Password" placeholder="Password" class="input" required>
             <input type="date" name="DateofBirth" placeholder="Date of Birth" class="input" id="inputdate" required>
             <input type="text" name="ContactNumber" placeholder="Contact Number" class="input">
            <button type="submit" name="sbtn" class="button">Add</button>
        </form>
</div>

    <?php require_once("footer.php") ?>

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","codetoday");
if(isset($_POST['sbtn']))
{
mysqli_query($con, "insert into users(Fullname, Email, Password, DateofBirth, ContactNumber) values ('".$_POST['Fullname']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['DateofBirth']."','".$_POST['ContactNumber']."')");

echo "User Added Successfully!";
}
?>
