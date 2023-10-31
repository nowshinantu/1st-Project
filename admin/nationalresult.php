<style>
    .col-4{
        width: 30%;
        height: 80vh;
        box-shadow: 0px 0px 10px black;
        margin: auto;
        padding: 20px;
    }

    .col-4 h3{
        font-size: 38px;
        margin-bottom: 20px;
    }
    
</style>
<?php

function city($x){
$city = "SELECT * FROM electioncode INNER JOIN votingcode on votingcode.VotingCode = electioncode.AreaCode INNER JOIN AreaCode ON votingcode.AreaCode = AreaCode.AreaCode WHERE ElectionCode = '".$x."'";
include_once('../db/dbconnect.php');
    $cityrseult = getDataFromDB($city);

    foreach($cityrseult as $cityrow){
        return $cityrow['AreaName'];
    }
}

?>
<h1 style="text-align: center; margin-bottom: 10vh">Result of <?php echo city($_GET["ElectionCode"]) ?> Upazilla</h1>



<div class="col-4">
   <h2 style="text-align: center; margin-bottom: 5vh">Member of Parliament</h2> 
<?php 
    $srql = "SELECT * FROM candidatecode INNER JOIN candidate_registration ON candidate_registration.CandidateCode = candidatecode.CandidateCode WHERE NominationFor = 'Member of Parliament' AND ElectionCode = '".$_GET["ElectionCode"]."'  ORDER BY VoteCount DESC ";
    include_once('../db/dbconnect.php');
    $rseult = getDataFromDB($srql);
    foreach($rseult as $srow){
        ?>
            <h3><?php echo $srow["Cname"] ?> : <?php echo $srow["VoteCount"] ?></h3>
        <?php
    }
?>
</div>

