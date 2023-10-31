<?php
if(isset($_GET["inactive"])){
    $sql = "UPDATE `electioncode` SET `Status`='Inactive' WHERE `ElectionCode` = '".$_GET["inactive"]."'";
    include_once('../db/db.php');
    if($con->query($sql) === TRUE){
        echo '<script language="javascript">'; 
        echo 'alert("Vote Inactive Successfully");
        location.href="voteactivation.php"';
        echo '</script>';
    }
    else{
        echo "fail";
    }
}

elseif(isset($_GET["active"])){
    $sql = "UPDATE `electioncode` SET `Status`='Active' WHERE `ElectionCode` = '".$_GET["active"]."'";
    include_once('../db/db.php');
    if($con->query($sql) === TRUE){
        echo '<script language="javascript">'; 
        echo 'alert("Vote Active Successfully");
        location.href="voteactivation.php"';
        echo '</script>';;
    }
    else{
        echo "fail";
    }
}

elseif(isset($_GET["completed"])){
    $sql = "UPDATE `electioncode` SET `Status`='Completed' WHERE `ElectionCode` = '".$_GET["completed"]."'";
    include_once('../db/db.php');
    if($con->query($sql) === TRUE){
        echo '<script language="javascript">'; 
        echo 'alert("Vote Completed Successfully");
        location.href="voteactivation.php"';
        echo '</script>';;
    }
    else{
        echo "fail";
    }
}

?>