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
    <link rel="stylesheet" href="./homestyle.css">

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
        
        ?> , </h1>
         <?php
            
            if(isset($_POST['book'])){
                $date=$_POST['date'];
                $phone=$_POST['phone'];
                $stype=$_POST['servicetype'];
                include("dbconnect.php");
                $sql = 'Insert into service (name,date,phone,email,servicetype) VALUES
               ("'.$name.'","'.$date.'","'.$phone.'","'.$user.'","'.$stype.'")';
               if(mysqli_query($conn,$sql)){
               header('location:queue.php');
               exit();
               }
               else{
               header('location:home.php');
               exit();
               }
               mysqli_close($conn);
            }



            ?>
        <div class="content">
            <form action="" method="post">
                <!-- <input type="text" name="name" id="" value="<?php $name ?>"> -->
                <input type="date" name="date" id="" placeholder="Choose appointment date and time" required>
                <input type="text" name="phone" id="" placeholder="Enter phone number" required>
                <input type="text" name="servicetype" id="" placeholder="Enter what do you want to do" required>
                <input type="submit" value="Book Appointment" name="book" class="bookbtn">
                <p class="error success-error">><?php echo $success ?></p>
                <p class="success"><?php echo $success ?></p>
            </form>
           
        </div>
    </div>
</body>
</html>