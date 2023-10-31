<?php
$Email = $_POST['email'];
$Password = $_POST['password'];

$usersql = "SELECT * FROM pratice WHERE email = '".$Email."'";
// echo $usersql;
include_once 'db/dbconnect.php';
$som = getDataFromDB($usersql);
$count = count($som);
if($count != 0){

    session_start();
    foreach($som as $row){

        if($row['email'] == $Email and $row["password"] == $Password){

            if($row['userrole'] == "Admin"){
                $_SESSION["user_role"] = 'Admin';
                $_SESSION["email"] = $row["email"];
                $_SESSION["flag"] = 'running';
                header("Location: admin/dashboard.php");
            }
                elseif($row['userrole'] == "Voter"){
                    $_SESSION["user_role"] = 'Voter';
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["flag"] = 'running';
                    header("Location: user/dashboard.php");
                }
            else{
                echo 'non-user';
            }
        }
        else{
            echo "Invalid Email & Password";
        }
    }

}
else{
    echo "No User Found";
}
?>
