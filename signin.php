<?php
// require("dbconnect.php");
session_start();
// session_destroy();
$email=null;
$passwordd=null;
$email_error=null;
$password_error=null;
$registration_error=null;
$login_error=null;
$success=null;
if(isset($_POST['log'])){
    $email=$_POST['email'];
    $passwordd=$_POST['password'];
    if( $email==""){
        $email_error="Email is blank";
    } 
    else if($passwordd == ""){
        
            $password_error="Password is blank";
    }
        
        else{
            include("dbconnect.php");
            $sql = "SELECT * from registration where email='$email' and pass='$passwordd'";
            $retval = mysqli_query($conn ,$sql);
            if(mysqli_num_rows($retval)>0){
                // $success = "Login successful";
                header('location:home.php');
                $_SESSION["email"] = $email;

                exit();

            }
            else{
                $login_error = "Login failed";

            }
mysqli_close($conn);
        }
    }


    
    if(isset($_POST['adminlog'])){
        $email=$_POST['email'];
        $passwordd=$_POST['password'];
        if( $email==""){
            $email_error="Email is blank";
        } 
        else if($passwordd == ""){
            
                $password_error="Password is blank";
        }
            
            else{
                include("dbconnect.php");
                $sql = "SELECT * from admin where username='$email' and pass='$passwordd'";
                $retval = mysqli_query($conn ,$sql);
                if(mysqli_num_rows($retval)>0){
                    // $success = "Login successful";
                    header('location:adminhome.php');
                    $_SESSION["email"] = $email;
    
                    exit();
    
                }
                else{
                    $login_error = "Login failed";
    
                }
    mysqli_close($conn);
            }
        }
    
    
        
    