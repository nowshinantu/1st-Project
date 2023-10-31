<?php 
$email = $_GET["serialno"];

$sql = "UPDATE pratice SET Status = 'approved' WHERE email = '".$email."'";
include_once('../../db/db.php');

if($con->query($sql) === TRUE){
    echo 'successful';
}
else{
    echo "fail";
}
?>