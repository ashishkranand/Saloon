<?php
if(isset($_POST['logshow'])){
    header('location : ./login.php');
    exit();
}

if(isset($_POST['regshow'])){
    header('location : ./index.php');
    exit();
}


?>