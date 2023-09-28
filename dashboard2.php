<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left-Side Dashboard</title>
   
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


        /* Input form css start*/

        /* Add your styling for the form and container here */


.container {
    
    display:none;
            position:relative;
            left:260px;
            top:-50px;
            bottom:690px;
            right:auto;
    background-color: #6C7A89;
    color:white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);
    max-width:300px;  
    text-align: center;
}

.container2 {
    display:none;
            position:fixed;
            left:260px;
            top:50px;
            bottom:90px;
            right:auto;
    background-color: #757A79;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 2.5);
    width: 25%;   
    text-align: center;
}
.container3 {
    display:none;
            position:fixed;
            left:260px;
            top:50px;
            bottom:90px;
            right:auto;
    background-color: #757A79;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 2.5);
    width: 25%;   
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition:  0.3s;
}

button:hover {
    background-color: #0056b3;
}

        /* Input form css end*/

        /* fetch starts here */

        #fetch1{
            display:none;
        }
        /* fetch ends here */

/* ___________________________________________Responsive Screen code Starts here__________________________________________ */


        /* Optional: Adjust styles for different screen sizes */
        @media screen and (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

/* ___________________________________________Responsive Screen code Ends here__________________________________________ */

    </style>
</head>
<body>
<?php
     require_once("header.php");
    ?>

    <!-- Sidebar -->
    <div class="sidebar" id="dashboard">
     <h3 ><a href="#" onclick="changeContent('admindb')">Admin Dashboard</a></h3>
        <a href="#" onclick="changeContent('adduser')">Add User</a>
        <a href="#" onclick="changeContent('fetch')" name='btn'>Fetch</a>
        <a href="#" onclick="changeContent('delete')">Delete</a>
        <a href="#" onclick="changeContent('customers')">Customers</a>
        <a href="#" onclick="changeContent('reports')">Reports</a>
        <a href="#" onclick="changeContent('settings')">Settings</a>
        <a href="#" onclick="changeContent('about')">About</a>

    </div>

      <!-- Main Content Area -->
      <div class="content" id="content">
                <h1>Welcome to the Dashboard</h1>
                <p>This is the main content area where you can display various dashboard components.</p>
            </div>


            <br>
            <br>
            <br>

    <!-- input form start -->
    
    <div class="container" id="container">
        <h3>Add User</h3>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <!-- input form end -->


    <!-- fetch starts here -->
   
    
         <div class="container2" id="fetch1">
            <h3>Registered Users</h3>
        <?php
        // $con=mysqli_connect("localhost","root","","codetoday");
        // if(isset($_POST['btn'])){
        //     $records=mysqli_query($con,"select * from user");
        //     while($r=mysqli_fetch_assoc($records))
        //     {
      
        //             echo "<table>";
        //             echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Passkey</th><th>Action</th></tr>";

        //             while ($row = $result->fetch_assoc()) {
        //                 echo "<tr>";
        //                 echo "<td>" . $r["id"] . "</td>";
        //                 echo "<td>" . $r["first_name"] . "</td>";
        //                 echo "<td>" . $r["last_name"] . "</td>";
        //                 echo "<td>" . $r["email"] . "</td>";
        //                 echo '<td> <button onclick="viewMore(' . $r["id"] . ')">more</button></td>';
                        //    echo '<td> <button onclick="viewMore(' . $r["id"] . ')">remove</button></td>';
        //                 echo "</tr>";
        //             }

        //             echo "</table>";

       
    
       
    ?>
                </div>  
    
<!-- fetch ends here -->
<!-- Delete Logic starts here -->

<div class="container3" id="delete">
            <h3>Delete Users</h3>
            <button onclick="confirmation()">Delete</button>
        <?php
        // $con=mysqli_connect("localhost","root","","codetoday");
        // if(isset($_POST['btn'])){
        //     $records=mysqli_query($con,"select * from user");
        //     while($r=mysqli_fetch_assoc($records))
        //     {
      
        //             echo "<table>";
        //             echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Passkey</th><th>Action</th></tr>";

        //             while ($row = $result->fetch_assoc()) {
        //                 echo "<tr>";
        //                 echo "<td>" . $r["id"] . "</td>";
        //                 echo "<td>" . $r["first_name"] . "</td>";
        //                 echo "<td>" . $r["last_name"] . "</td>";
        //                 echo "<td>" . $r["email"] . "</td>";
        //                 echo '<td> <button onclick="viewMore(' . $r["id"] . ')">more</button></td>';
                        //    echo '<td> <button onclick="viewMore(' . $r["id"] . ')">remove</button></td>';
        //                 echo "</tr>";
        //             }

        //             echo "</table>";

       
    
       
    ?>
                </div>  
<!-- Delete Logic Ends here -->
  
</body>
</html>

<<script>
  

        var adduserdiv= document.getElementById('container');
        var fetchdiv= document.getElementById('fetch1');
        var deldiv= document.getElementById('delete');

        var adm= document.getElementById('content');

        function changeContent(option)
        {        
            if(option==="adduser")
            {
            adduserdiv.style.display ='block';  
            fetchdiv.style.display ='none'; 
            adm.style.display="none"; 
            deldiv.style.display="none"; 

            }
            else if(option==="fetch")
            {
                fetchdiv.style.display ='block'; 
                adduserdiv.style.display ='none';  
                adm.style.display ='none';  
            deldiv.style.display="none"; 


                 
            }  
            else if(option==="admindb")
            {
                adm.style.display ='block'; 
                adduserdiv.style.display ='none';  
                fetchdiv.style.display ='none'; 
                deldiv.style.display="none"; 
  

            }   
            else if(option==="delete")
            {
                adm.style.display ='none'; 
                adduserdiv.style.display ='none';  
                fetchdiv.style.display ='none'; 
                deldiv.style.display="block"; 
  

            }   
             

        }
        function confirmation(){
            var result= confirm("Are you sure you want to delete?");
            if(result){
                alert("Deleted Successfully");
            }
        }
    </script>
   
   <?php
require_once('footer.php');
?>