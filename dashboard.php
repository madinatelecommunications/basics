<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
<style>
        /* Basic styling for the dashboard */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Styling for the sidebar */
        .sidebar {          
            background-color: #333;
            color: white;
            width: 250px;
            /* height: 100%; */
                position: fixed;
                    top: 50px;
                    left: 0;
                    bottom:90px;
                    border-radius:5px;
            overflow-y: auto;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: GreenYellow;
            color:black;
        }
        /* Styling for the main content area */
        .content {
            margin-left: 250px; /* Width of the sidebar */
            padding: 20px;           
        }
        h3{
            Color:GreenYellow;
            text-align:center;
            margin-top:0px;
        }

        /* _______Responsive Screen code Starts here*/

        /* Optional: Adjust styles for different screen sizes */
        @media screen and (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }


</style>
</head>
<body>
<?php
     require_once("header.php");
    ?>

    <!-- Sidebar -->
    <div class="sidebar" id="dashboard">
     <h3 ><a href="#" onclick="window.location.href='maincontent.php'">Admin Dashboard</a></h3>
        <a href="#" onclick="window.location.href='adduser.php'">Add User</a>
        <a href="#" onclick="window.location.href='maintenance.php'">Fetch</a>
        <a href="#" onclick="window.location.href='maintenance.php'">Delete</a>
        <a href="#" onclick="window.location.href='maintenance.php'">Customers</a>
        <a href="#" onclick="window.location.href='maintenance.php'">Reports</a>
        <a href="#" onclick="window.location.href='maintenance.php'">Settings</a>
        <a href="#" onclick="window.location.href='maintenance.php'">About</a>

    </div>

      
       
  <?php
     require_once("footer.php");
    ?>

    