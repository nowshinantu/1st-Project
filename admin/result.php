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
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
            <div class="form-box">
                <h2>Result</h2>
                <form action="result_fetch.php">
                <div class="title" style="margin-top: 15px">Select a voting area</div>
                <div class="input">
                <select name="ElectionCode" id="">
                    <option value="">Select an area code</option>
                    <?php
                    $sql = "SELECT * FROM electioncode INNER JOIN votingcode on votingcode.VotingCode = electioncode.AreaCode INNER JOIN AreaCode ON votingcode.AreaCode = AreaCode.AreaCode WHERE Status = 'Completed'";
                    include_once('../db/dbconnect.php');
                    $res = getDataFromDB($sql);
                    foreach($res as $row){
                        ?>
                            <option value="<?php echo $row["ElectionCode"] ?>"><?php echo $row["AreaName"].' - '.$row["AreaType"].'('.$row["AreaCode"].')' ?></option>
                        <?php
                    }
                
                    ?>
                </select>
                </div>
                <button type="submit">Search</button>
                </form>
              
            </div>
        </div>
    </div>
</body>
</html>