<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/form-box.css">
 <style>
     @media only screen and (max-width:1400px) {
     .form-box .title{
         width: 30%;
     }
    }
 </style>
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
            <div class="form-box">
                <h2>Symbol Code</h2>
                <form action="server/symboladd.php" method="POST" enctype="multipart/form-data">
                <div class="title">Candidate Code</div>
                <div class="input" style="margin-left: -8px">
                <select name="CandidateCode" id="">
                    <option value="">Select a candidate code</option>
                    <?php
                        $sql = "SELECT * FROM candidatecode";
                        include_once('../db/dbconnect.php');
                        $res = getDataFromDB($sql);
                        foreach($res as $key){
                            ?>
                                <option value="<?php echo $key["CandidateCode"] ?>"><?php echo $key["CandidateCode"] ?></option>
                            <?php
                        }
                    ?>
                </select>
                </div>
              
                <div class="title" style="width:29%">Election Code</div>
                <div class="input">
                <select name="ElectionCode" id=""  style="margin-left: 0px">
                    <option value="">Select an election code</option>
                    <?php
                        $sql = "SELECT * FROM electioncode";
                        include_once('../db/dbconnect.php');
                        $res = getDataFromDB($sql);
                        foreach($res as $key){
                            ?>
                                <option value="<?php echo $key["ElectionCode"] ?>"><?php echo $key["ElectionCode"] ?></option>
                            <?php
                        }
                    ?>
                </select>
                </div>
                <div class="title" style="width:29%">Symbol Name</div>
                <div class="input">
                <input type="text" name="SymbolName">
                </div>
                <div class="title" style="width:29%">Symbol</div>
                <div class="input">
                <input type="file" name="Symbol">
                </div>
                <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>