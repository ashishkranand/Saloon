<?php
session_start();
// if($_SESSION['logged'] == true){ 
    $user= $_SESSION['email'];
// }
require("logout.php");
$success=null;
$success_error=null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Queue - Saloon</title>
    <link rel="stylesheet" href="./homestyle.css">

</head>
<body>
    <nav>
        <ul>
            <a href="./home.php"><li>Home</li></a>
            <a href="#"><li>History</li></a>
            <a href="#"><li>Appointment</li></a>
            <a href="#"><li>Contact us</li></a>
            <a href=".//login.php" name="logout"><li>Logout</li></a>

        </ul>
    </nav>
    <div class="main">
        <h1 class="username"> Hello 
        <?php          
        include("dbconnect.php");
        $sql = "SELECT * FROM registration where email='$user'";
        $retval = mysqli_query($conn ,$sql);
        if(mysqli_num_rows($retval)>0){
            while($row=mysqli_fetch_assoc($retval)){
                $name=$row['name'];
                echo $name;
            }
        }
        else{
            echo "0 results.";
        }
        mysqli_close($conn);
        
        ?> , Your appointment booked successfully. You are in the queue</h1>
        <div class="content">
           <?php
             include("dbconnect.php");
             $sql = "SELECT * FROM service where email='$user'";
             $retval = mysqli_query($conn ,$sql);
             if(mysqli_num_rows($retval)>0){
                 while($row=mysqli_fetch_assoc($retval)){
                     $id=$row['queue'];
                     
                 }
             }
             else{
                 echo "0 results.";
             }
             mysqli_close($conn);
           ?>
           <h1 class="queuenum" style="text-align: center;"> <span style="font-size: 95px;"><?php if($id==0){echo "Under process";} else{echo $id;} ?></span> <br><br><br> QUEUE NO.</h1>
        </div>
    </div>
</body>
</html>