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
$Password = $_POST["password"];
$User_role = $_POST["userrole"];
$Address = $_POST["address"];
// $District = $_POST["district"];
// $Upazila = $_POST["upazila"];
// $Ward_no = $_POST["ward"];

$insert = "INSERT INTO `pratice`(`Cname`, `Fname`, `Mname`, `email`, `birthdate`, `PNumber`, `gender`, `Bgroup`, `nid`, `password`, `userrole`, `address`, `AreaCode`, `NationalCode`, `status`) VALUES ('$Candidate_Name','$Fathers_Name','$Mothers_Name','$Email','$Date_of_birth','$Phone_Number','$Gender','$Blood_Group','$NID_No','$Password','$User_role','$Address','".$_POST['AreaCode']."', '".$_POST['NationalAreaCode']."','pending')";


if($con->query($insert) === TRUE){
    echo 'successful';
}
else{
    echo "fail";
}



?>
