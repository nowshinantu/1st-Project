<?php
$sql="DELETE FROM pratice WHERE email='".$_GET["serialno"]."'";
include_once("../../db/db.php");

if($con->query($sql) === TRUE){
    echo '<script language="javascript">'; 
    echo 'alert("Citizen Removed Successfully");
    location.href="../citizen_pending.php"';
    echo '</script>';
}
else{
    echo "fail";
}

?>