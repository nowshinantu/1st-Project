<?php

    $sql = "INSERT INTO `electioncode`( `ElectionCode`, `AreaCode`, `Date`) VALUES ('".$_POST["ElectionCode"]."', '".$_POST["AreaCode"]."', '".$_POST['ElectionDate']."')";

    include_once('../../db/db.php');
    if($con->query($sql) === TRUE){
        echo 'successful';
    }
    else{
        echo "fail";
    }
    

?>