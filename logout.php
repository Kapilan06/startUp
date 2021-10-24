<?php
    session_start();
    unset($_SESSION['verified_user_id']);
    unset($_SESSION['idTokenString']);

    if(isset($_SESSION['expiry_status'])){
        $_SESSION['status']='expired';
    }
    else{
    $_SESSION['status']='Logged Out successfully';
    header('Location: login1.php');
    exit();
    }

?>