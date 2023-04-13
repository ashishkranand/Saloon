<?php
require("registration.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Login</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="./style.css">
    <?php
    if($name_error != null){
        ?> <style>.name-error{display: block}</style> <?php
    }
    if($email_error != null){
        ?> <style>.email-error{display: block}</style> <?php
    }
    if($phone_error != null){
        ?> <style>.phone-error{display: block}</style> <?php
    }
    if($password_error != null){
        ?> <style>.password-error{display: block}</style> <?php
    }
    if($cpassword_error != null){
        ?> <style>.password-error{display: block}</style> <?php
    }
    if($success != null){
        ?> <style>.success{display: block}</style> <?php
    }
    if($samepassword_error != null){
        ?> <style>.error{display: block}</style> <?php
    }
    if($registration_error != null){
        ?> <style>.registration-error{display: block}</style> <?php
    }

?>
</head>
<body>
    <div class="main">
        <div class="left">
            <img src="./images/homebackground.jpg" alt="" class="image">
        </div>
        <div class="right">
            <div class="rform">
                <form action="" method="post" class="regform" id="signup">
                    <h1 class="heading">Registration</h1>
                    <input type="text" name="name" id="" value="<?php $name ?>" placeholder="Enter name">
                    <p class="error name-error"><?php echo $name_error ?></p>
                    <input type="text" name="email" id="" value="<?php $email ?>" placeholder="Enter email">
                    <p class="error email-error"><?php echo $email_error ?></p>
                    <input type="text" name="phone" id="" value="<?php $phone ?>" placeholder="Enter phone">
                    <p class="error phone-error"> <?php echo $phone_error ?></p>
                    <input type="password" name="password" id="" value="<?php $password ?>" placeholder="Enter password">
                    <p class="error password-error"><?php echo $password_error ?></p>
                    <input type="password" name="cpassword" id="" value="<?php $cpassword ?>" placeholder="Enter confirm password">
                    <p class="error password-error"><?php echo $cpassword_error ?></p>
                    <p class="error samepassword-error"><?php echo $samepassword_error ?></p>
                    <input type="submit" value="Register" name="reg" class="btn">
                   <a href="./login.php">Already registered , Login</a>
                    <p class="success"><?php echo $success ?></p>
                    <p class="error registration-error"><?php echo $registration_error ?></p>
                </form>
                

            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>