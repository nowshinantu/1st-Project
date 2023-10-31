<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/citycorporation.css">
</head>
<body>
    <?php
    session_start();
    $electioncode = "SELECT Max(ElectionCode),Votetype FROM pratice INNER JOIN votingcode ON pratice.AreaCode = votingcode.AreaCode  INNER JOIN electioncode ON electioncode.AreaCode = votingcode.VotingCode WHERE email = '".$_SESSION["email"]."'";
    include('../db/dbconnect.php');
    $electres = getDataFromDB($electioncode);
    
foreach($electres as $electrow){
    
    if($electrow["Votetype"] == "City Corporation"){
    
    $electcode =  $electrow["Max(ElectionCode)"];
   
    $find = "SELECT * FROM electioncode WHERE ElectionCode = '".$electcode."' AND Status = 'Active'";

    $res = getDataFromDB($find);

    foreach($res as $row){
   ?>
    <div class="header">

<div class="middle"><h1>Online Voting System</h1></div>
<div class="right">
<button> <i class="fa fa-home"></i> Home</button>
<button> <i class="fa fa-wrench"></i> Profile</button>
<button> <i class="fa fa-power-off"></i><a href="signout.php"> Log Out</a></button>
</div>
    </div>
    
    <div class="container">
       <form action="server/votecast.php" method="POST">
       <div class="column">
           <div class="title-header">
               <h3>Mayor</h3>
               <?php
               $mayorsql = "SELECT * FROM symbols INNER JOIN candidate_registration ON candidate_registration.CandidateCode = symbols.CandidateCode WHERE candidate_registration.NominationFor ='Mayor' AND symbols.ElectionCode = '".$row["ElectionCode"]."'";
               include_once('../db/dbconnect.php');
               $resm = getDataFromDB($mayorsql);
               foreach($resm as $keyss){
                   ?>
                    <label>
                        <div class="candidate"> 
                        <div class="radiovote">
                        <input type="radio" name="Mayor" value="<?php echo $keyss["CandidateCode"]; ?>"> 
                        <img src="<?php echo $keyss["SymbolPath"]; ?>" alt="">
                        </div>
                        <div class="votername"><?php echo $keyss["Cname"]; ?></div>
                    </div>

                        </label>
                   <?php
                   
               }

               ?>
              
  

           </div>
       </div>
       <div class="column">
           <div class="title-header">
               <h3>Councelor</h3>
               <?php
               $mayorsql = "SELECT * FROM symbols INNER JOIN candidate_registration ON candidate_registration.CandidateCode = symbols.CandidateCode WHERE candidate_registration.NominationFor ='Councelor' AND symbols.ElectionCode = '".$row["ElectionCode"]."'";
               include_once('../db/dbconnect.php');
               $resm = getDataFromDB($mayorsql);
               foreach($resm as $keyss){
                   ?>
                    <label>
                        
                        <div class="candidate">
                        <div class="radiovote">
                            <input type="radio" name="Councelor" value="<?php echo $keyss["CandidateCode"]; ?>"> 
                        <img src="<?php echo $keyss["SymbolPath"]; ?>" alt="">
                        </div>
                        <div class="votername"><?php echo $keyss["Cname"]; ?></div>
                    </div>

                        </label>
                   <?php
                   
               }

               ?>
           </div>
       </div>
       <div class="column">
           <div class="title-header">
               <h3>Female Councelor</h3>
               <?php
               $mayorsql = "SELECT * FROM symbols INNER JOIN candidate_registration ON candidate_registration.CandidateCode = symbols.CandidateCode WHERE candidate_registration.NominationFor ='Female Councelor' AND symbols.ElectionCode = '".$row["ElectionCode"]."'";
               include_once('../db/dbconnect.php');
               $resm = getDataFromDB($mayorsql);
               foreach($resm as $keyss){
                   ?>
                    <label>
                        <div class="candidate">
                        <div class="radiovote">    
                        <input type="radio" name="FemaleCouncelor" value="<?php echo $keyss["CandidateCode"]; ?>"> 
                        <img src="<?php echo $keyss["SymbolPath"]; ?>" alt="">
                        </div>
                        <div class="votername"><?php echo $keyss["Cname"]; ?></div>
                    </div>

                        </label>
                   <?php
                   
               }

               ?>
           </div>
       </div>
       <button type="submit" class="submit">Submit your vote</button>
       </form>
    </div>

    <?php 
    }
}
else{
    echo "you are not a person from city-corporation";
}

}

// }
        
       

// }
// echo "Maybe you are not eligible to enter here";
    ?>
</body>
</html>