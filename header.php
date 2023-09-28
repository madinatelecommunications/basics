<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Navigation Bar</title>
    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
            max-width: auto;

        }
        

        /* Style for the navigation links */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 10px 10px 0 0;

        }

        .navbar a:hover {
            display: block;
            color: black;
            background-color: greenyellow;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
           

        }

        /* Style for the dropdown content */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Style for the dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            background-color: inherit;
            margin: 0;
            padding: 14px 16px;
            cursor: pointer;
        }

        /* Style for the dropdown content when hidden */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }

        /* Style for the links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Style for the links inside the dropdown on hover */
        .dropdown-content a:hover {
            background-color: greenyellow;
            color: black;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style for the dropdown user button */
        .dropdownuser .dropbtn1 {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            background-color: inherit;
            margin: 0;
            padding: 14px 16px;
            cursor: pointer;
            float:left;
        }
        .dropdownuser:hover .dropbtn1 {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            background-color: inherit;
            margin: 0;
            padding: 14px 16px;
            cursor: pointer;
            float:right;
        }

        /* Style for the dropdownuser content */
        .dropdownuser {
            float: left;
            overflow: hidden;
        }

        /* Style for the dropdownuser button */
        .dropdownuser .dropbtnu {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            background-color: inherit;
            margin: 0;
            padding: 14px 16px;
            cursor: pointer;
        }
      /* Style for the dropdownuser content when hidden */
        .dropdownu-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;

        }

        /* Style for the links inside the dropdownuser */
        .dropdownu-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Style for the links inside the dropdownuser on hover */
        .dropdownu-content a:hover {
            background-color: Greenyellow;
            color: black;
        }

        /* Show the dropdownuser menu on hover */
        .dropdownuser:hover .dropdownu-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#" onclick="window.location.href='maincontent.php'">Home</a>
        <a href="#"  onclick="window.location.href='maintenance.php'">Admission</a>
        <div class="dropdown">
            <button class="dropbtn">Services
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#"  onclick="window.location.href='maintenance.php'">Web App Development</a>
                <a href="#"  onclick="window.location.href='maintenance.php'">Software Development</a>
                <a href="#" onclick="window.location.href='maintenance.php'">Android/IOS Development</a>
            </div>
        </div>
        <a href="#">Archive</a>
        
        <div class="dropdown-content">
                <a href="#" onclick="window.location.href='maintenance.php'">Downloads</a>
                <a href="#" onclick="window.location.href='maintenance.php'">Student</a>
                <a href="#" onclick="window.location.href='maintenance.php'">Batch</a>
            </div>
        
           
        <div class="dropdownuser" >
            <button class="dropbtnu">User
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdownu-content">
                <a href="#" onclick="window.location.href='maintenance.php'">Profile</a>
                <a href="main.php" onclick="logout()">Logout</a>
                <a href="#" onclick="window.location.href='maintenance.php'">Site-map</a>
            </div>
        </div>
       
        
    </div>

    <!-- The rest of your content goes here -->

    <script>
        function logout() {
            // Add your logout logic here
            alert("Logged out");
        }


    </script>
</body>
</html>
