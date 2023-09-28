<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main Content</title>
</head>

<style>
            .content{

               margin-top: 00px;
               margin-left: 300px;

            }
            .content h1 {
                font-size: 2.5rem;
                margin-bottom: 10px;
               
            }

            .content p {
                font-size: 1.2rem;
            }
             
                .box {
              width: 400px;
              height: 100px;
              margin-left: 500px;
              margin-top: 30px;
              padding: 20px;
              background: linear-gradient(45deg, #ff6b6b, #6b47ff);
              border-radius: 10px;
              box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);
              justify-content: center;
              align-items: center;              
            }
            h2{
            Color:GreenYellow;
            text-align:center;
            margin-top:-10px;
            font-size: 40px;
        }
            

</style>
<?php require_once("header.php") ?>
    <?php require_once("dashboard.php") ?>
<body>


<!-- Main Content Area -->
      <div class="content" id="content">
                <h1>Welcome to the Dashboard</h1>
                <p>This is the main content area where you can display various dashboard components.</p>
            </div>
    <?php require_once("footer.php") ?>

      <div class="box">
        <?php echo "<h3>Total Registered Users</h3>";
          echo "<br>";
            $con=mysqli_connect("localhost","root","","codetoday");
            $records=mysqli_query($con,"select * from users");
            $r=mysqli_num_rows($records);
            echo "<h2>$r</h2>";
         ?>


      </div>


</body>
</html>
