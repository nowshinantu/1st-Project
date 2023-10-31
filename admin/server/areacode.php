<?php

    include_once('../../db/dbconnect.php');
    $code = "SELECT MAX(SerialNo) as counter FROM votingcode";
    $coderes = getDataFromDB($code);

    foreach($coderes as $key){
        if($key['counter'] == NULL){
            $id = 1;
        }
        else{
            $id = $key['counter']+1;
        }
        
    }
    $type = $_POST["Type"];

    if($type == 'City Corporation'){
        $curr_id = 'City-'.$id;
    }
    elseif($type == 'Municipality'){
        $curr_id = 'Muni-'.$id;
    }
    elseif($type == 'National'){
        $curr_id = 'Nat-'.$id;
    }
    else{

    }
    $insertsql = "INSERT INTO `votingcode`( `VotingCode`, `Votetype`, `AreaCode`) VALUES ('".$curr_id."','".$type."','".$_POST["Area"]."')";

    include_once('../../db/db.php');

    if($con->query($insertsql) === TRUE){
        echo '<script language="javascript">'; 
        echo 'alert("Areacode Added Successfully");
        location.href="../areacode.php"';
        echo '</script>';
    }
    else{
        echo "fail";
    }
 

?>