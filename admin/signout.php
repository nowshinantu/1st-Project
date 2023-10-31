<?php 
    session_start();
    $_SESSION["user_role"] = '';
                $_SESSION["email"] = '';
                $_SESSION["flag"] = '';
                
                header("Location: ../index.php");

?>