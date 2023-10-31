<?php
session_start();
// echo $_SESSION["email"];
if(isset($_POST['Councelor'])){
    $Commissioner = $_POST['Councelor'];
}
else{
    $Commissioner = '';
}
if(isset($_POST['FemaleCouncelor'])){
    $FemaleCommissioner = $_POST['FemaleCouncelor'];
}
else{
    $FemaleCommissioner = ''; 
}
$fetch = "SELECT * FROM pratice WHERE email = '".$_SESSION["email"]."'";
include_once('../../db/dbconnect.php');
$res = getDataFromDB($fetch);
foreach($res as $row){
    $nid = $row["nid"];
}
// echo $nid;
function check($nid, $electioncode){
    $election = "SELECT * FROM munivotinghistory WHERE NID = '".$nid."' AND ElectionCode = '".$electioncode."'";
    include_once('../../db/dbconnect.php');
    $rese = getDataFromDB($election);
    if(count($rese) <= 3){
        return 'Okay';
    }
    else{
        return 'Not Okay';
    }
}
$election = "SELECT * FROM candidatecode WHERE CandidateCode = '".$_POST["Mayor"]."'";
include_once('../../db/dbconnect.php');
$rese = getDataFromDB($election);
foreach($rese as $row){
    $electioncode = $row["ElectionCode"];
    $votecount = $row["VoteCount"];

}
if(check($nid,$electioncode) == 'Okay'){
    $insert = "INSERT INTO `munivotinghistory`( `NID`, `ElectionCode`, `Chairman`, `Commissioner`, `WomanCommissioner`) VALUES ('".$nid."', '".$electioncode."', '".$_POST["Mayor"]."','".$Commissioner."','".$FemaleCommissioner."')";
    // $insert = "INSERT INTO `votinghistory`( `NID`, `ElectionCode`, `Mayor`) VALUES ('".$nid."', '".$electioncode."', '".$_POST["Mayor"]."')";
    $votecount = $votecount+1;
    $updatesql = "UPDATE `candidatecode` SET `VoteCount`='".$votecount."' WHERE CandidateCode = '".$_POST["Mayor"]."'";
    $updatecsql = "UPDATE `candidatecode` SET `VoteCount`='".$votecount."' WHERE CandidateCode = '".$Commissioner."'";
    $updatefcsql = "UPDATE `candidatecode` SET `VoteCount`='".$votecount."' WHERE CandidateCode = '".$FemaleCommissioner."'";
    include_once('../../db/db.php');
    if($con->query($insert) === TRUE AND $con->query($updatesql) === TRUE AND $con->query($updatecsql) AND $con->query($updatefcsql)){
        echo 'successful';
    }
    else{
        echo "fail";
    }

}
else{
    echo "Your vote casted already";
}


?>