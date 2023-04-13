<?php
require("dbconnect.php");
$name=null;
$email=null;
$phone=null;
$password=null;
$cpassword=null;
$name_error=null;
$email_error=null;
$phone_error=null;
$password_error=null;
$cpassword_error=null;
$samepassword_error=null;
$registration_error=null;
$success=null;
if(isset($_POST['reg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($name=="" && $email=="" && $phone=="" && $password=="" && $cpassword=="" ){
        $name_error="Name is blank";
        $email_error="Email is blank";
        $phone_error="Phone is blank";
        $password_error="Password is blank";
        $cpassword_error="Confirm password is empty";
    } 
    else{
        if($password != $cpassword){
            $samepassword_error="Password and confirm password are not same";
        }
        else{
            // $success="Success";
            include("dbconnect.php");
            $sql = 'Insert into registration (name,email,phone,pass,cpassword) VALUES
("'.$name.'","'.$email.'","'.$phone.'","'.$cpassword.'","'.$cpassword.'")';
    if(mysqli_query($conn,$sql)){
        $success="Registration successful";
    }
    else{
        $registration_error="Registration Failed";
    }
mysqli_close($conn);
        }
    }
}