<?php 

require '../db/db.php';

$Candidate_Name = $_POST["Cname"];
$Fathers_Name = $_POST["Fname"];
$Mothers_Name = $_POST["Mname"];
$Email = $_POST["email"];
$Date_of_birth = $_POST["birthdate"];
$Phone_Number = $_POST["PNumber"];
$Gender = $_POST["gender"];  
$Blood_Group = $_POST["Bgroup"];
$NID_No = $_POST["nid"];
$Address = $_POST["address"];

$insert = "INSERT INTO `candidate_registration`( `ElectionArea`, `NominationFor`, `CandidateCode`, `Cname`, `Fname`, `Mname`, `email`, `birthdate`, `PNumber`, `gender`, `Bgroup`, `nid`, `address`) VALUES ('".$_POST["AreaCode"]."','".$_POST["NominationType"]."','','$Candidate_Name','$Fathers_Name','$Mothers_Name','$Email','$Date_of_birth','$Phone_Number','$Gender','$Blood_Group','$NID_No','".$Address."')";



if($con->query($insert) === TRUE){
    echo 'successful';
}
else{
    echo "fail";
}



?>