<?php
$sql="DELETE FROM candidate_registration WHERE serialno='".$_GET["serialno"]."'";
include_once("../../db/db.php");

if($con->query($sql) === TRUE){
    echo '<script language="javascript">'; 
    echo 'alert("Candidate Removed Successfully");
    location.href="../candidatepending.php"';
    echo '</script>';
}
else{
    echo "fail";
}

?>