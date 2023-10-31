<?php 
    $sql = "INSERT INTO `candidatecode`(`CandidateCode`, `ElectionCode`) VALUES ('".$_POST["CandidateCode"]."','".$_POST["ElectionCode"]."')";
    $upsql = "UPDATE candidate_registration SET CandidateCode = '".$_POST['CandidateCode']."', status = 'approved' WHERE SerialNo = '".$_POST['SerialNo']."'";
include_once('../../db/db.php');
    if($con->query($sql) === TRUE and $con->query($upsql) === TRUE){
        echo '<script language="javascript">'; 
        echo 'alert("Candidate Code Added Successfully");
        location.href="../candidatepending.php"';
        echo '</script>';
    }
    else{
        echo "fail";
    }
?>