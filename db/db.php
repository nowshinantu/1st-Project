<?php
$con = new mysqli('localhost','root','','new_project');
if($con->connect_error){
    die('conncetion-fail' .$con->connect_error);
}
// else{
//     echo 'success';
// }



?>