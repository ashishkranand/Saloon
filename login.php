<?php
require("signin.php");
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
    
    if($email_error != null){
        ?> <style>.email-error{display: block}</style> <?php
    }
   
    if($password_error != null){
        ?> <style>.password-error{display: block}</style> <?php
    }
    
    if($success != null){
        ?> <style>.success{display: block}</style> <?php
    }
    
    if($login_error != null){
        ?> <style>.login-error{display: block}</style> <?php
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
            <form action="" method="post" class="logform" id="signin">
                    <h1 class="heading">Login</h1>
                    
                    <input type="text" name="email" id="" value="<?php $email ?>" placeholder="Enter email">
                    <p class="error email-error"><?php echo $email_error ?></p>
                    
                    <input type="password" name="password" id="" value="<?php $password ?>" placeholder="Enter password">
                    <p class="error password-error"><?php echo $password_error ?></p>
                    
                    <input type="submit" value="Login" name="log" class="btn">
                    <a href="./index.php">New user , Register</a>
                    <p class="success"><?php echo $success ?></p>
                    <p class="error login-error"><?php echo $login_error ?></p>
                </form>
                

            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>