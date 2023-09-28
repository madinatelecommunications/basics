
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <h1>Signup form</h1><br><br>
       <div class="wrapper"> <form action="" method="post" class="form1">
           <label class="labl">First Name:</label><input type="text" name="FIRSTNAME"  class="ipb"><br><br>
           <label class="labl">Last Name:</label><input type="text" name="LASTNAME"  class="ipb"><br><br> 
           <label class="labl">Mobile:</label><input type="text" name="MOBILE"  class="ipb"><br><br> 
           <label class="labl">Alt Mobile No.:</label><input type="text" name="ALTERNATEMOBILE"  class="ipb"><br><br> 
           <label class="labl">E-mail:</label><input type="text" name="EMAIL"  class="ipb"><br><br> 
           <label class="labl">Address1:</label><input type="text" name="ADDRESS1"  class="ipb"><br><br> 
           <label class="labl">Address2:</label><input type="text" name="ADDRESS2"  class="ipb"><br><br> 
           <label class="labl">State:</label><input type="text" name="STATE"  class="ipb"><br><br> 
           <label class="labl">City:</label><input type="text" name="CITY"  class="ipb"><br><br> 
           <label class="labl">Zip code:</label><input type="text" name="PINCODE"  class="ipb"><br><br>
                   <div class="subwrapper"> 
                    <div id="title1">Chose your username and password</div>
                    <br>
                   <label class="labl">Username:</label><input type="text" name="USERNAME"  class="ipb"><br><br> 
                   <label class="labl">Password:</label><input type="PASSWORD" name="PASSWORD"  class="ipb"><br><br> 
                    </div>
           <br><br> 
           <button name="btn">Submit</button> 

           <button name="ftch" >Fetch Available Users</button> 
        </form></div>

        </body>
</html>
        <style>

            *{
                margin:0;
                padding:0;
            }
            #title1{
                margin: 2px;
                position: relative;
                box-align: center;
                background-color: black;
                color: tomato;
                font-family: sans-serif;
                font-size: xx-large;
                border-radius: 5px;
                height:20px ;
                width:300px;
            }
            .wrapper{
                padding:40px;
                margin-left: 30px;
                background-color: whitesmoke;
                border-radius: 6px;
                width:500px;
                display: inlineblock;
                box-shadow: 3px 3px 13px  black;

            }
             .subwrapper{
                padding:10px;
                margin: 10px;
                background-color: tomato;
                border-radius: 8px;
                width:400px;
                                box-shadow: 3px 3px 13px  black;
                            }
            .labl{
                margin-right:30px;
            }
            .ipb{
                margin-left:20px;
                border-radius:6px;
                align:right;
                height:30px;
                width:150px;
                outline:none;
                border-bottom: solid black 2px ;

            }
            .rcd{

                background-color: whitesmoke;
                margin: 30px;
                padding: 30px;
                width: 150px;
                height:100px;
                border-radius: 6px;
                display:inline-block;
            }
        </style>


<?php
$con=mysqli_connect("localhost","root","","codetoday");
if(isset($_POST['btn']))
{
mysqli_query($con, "insert into suser(FIRSTNAME,LASTNAME,MOBILE,ALTERNATEMOBILE,EMAIL,ADDRESS1,ADDRESS2,STATE,CITY,PINCODE)values ('".$_POST['FIRSTNAME']."','".$_POST['LASTNAME']."','".$_POST['MOBILE']."','".$_POST['ALTERNATEMOBILE']."','".$_POST['EMAIL']."','".$_POST['ADDRESS1']."','".$_POST['ADDRESS2']."','".$_POST['STATE']."','".$_POST['CITY']."','".$_POST['PINCODE']."')");

mysqli_query($con, "insert into uaccount(Username,Password) values ('".$_POST['USERNAME']."', '".$_POST['PASSWORD']."')");

echo "Signup Successfully!";
}

if(isset($_POST['ftch']))
{
$records=mysqli_query($con,"select * from suser as A inner join uaccount as B on a.UID=b.UID");
while($r=mysqli_fetch_assoc($records))
{?>
    <div class="rcd">
        <span> <?php echo $r['UID'] ?> </span>
        <br>
        <span> <?php echo $r['FIRSTNAME'] ?> </span>
        <br>
        <span> <?php echo $r['Username'] ?> </span>
        <br>
        <span> <?php echo $r['Password'] ?> </span>
    </div>

<?php
}
}
?>