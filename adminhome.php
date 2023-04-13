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
    <title>Home - Saloon</title>
    <link rel="stylesheet" href="./adminhomestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <nav>
        <ul>
            <a href="./home.php"><li>Home</li></a>
            <a href="#"><li>History</li></a>
            <a href="./queue.php"><li>Appointment</li></a>
            <a href="#"><li>Contact us</li></a>
            <a href=".//login.php" name="logout"><li>Logout</li></a>

        </ul>
    </nav>
    <div class="main">
        <h1 class="username"> Hello admin , </h1>
         
        <div class="content">
           

        <?php          
        include("dbconnect.php");
        $sql = "SELECT * FROM service where status='0'";
        $retval = mysqli_query($conn ,$sql);
        if(mysqli_num_rows($retval)>0){
            while($row=mysqli_fetch_assoc($retval)){
                ?>
            <div class="card">
            <h2>Name :- <?php echo $row['name']; ?></h2>
            <h2>Date :- <?php echo $row['date']; ?></h2>
            <h2>Service :- <?php echo $row['servicetype']; ?></h2>
            <h2>Phone :- <?php echo $row['phone']; ?> <span style="font-size: large;"><a href="tel:<?php echo $row['phone']; ?>"><i class="fa fa-phone" style="font-size:38px;color:red"></i></a></span></h2><br>
            <h3>Email :- <?php echo $row['email']; ?></h3>
            <h>Queue :- <?php if($row['queue']==0){echo "Not provided";} ?></h>
        </div>
                <?php
            }
        }
        else{
            echo "0 results.";
        }
        mysqli_close($conn);
        
        ?>


        
           
        </div>
    </div>
</body>
</html>