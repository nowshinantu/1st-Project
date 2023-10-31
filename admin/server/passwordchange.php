<?php

session_start();

// echo $_SESSION['email'];

$sql = "SELECT * FROM pratice WHERE email = '".$_SESSION['email']."'";
include_once('../../db/dbconnect.php');
$result = getDataFromDB($sql);

foreach($result as $row){
    $dbpass = $row["password"];
}

$oldpass = $_POST["OldPass"];

if($oldpass != $dbpass){
    echo "Invalid Password";
}
elseif($_POST["NewPass"] != $_POST["conPass"]){
    echo "Passwords are not matched";
}
else{
    $updatesql = "UPDATE pratice SET password = '".$_POST["NewPass"]."' WHERE email = '".$_SESSION['email']."'";
    include_once('../../db/db.php');
    if($con->query($updatesql) === TRUE){
        echo 'successful';
    }
    else{
        echo "fail";
    }

}

?>