<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
            <?php
                // echo $_GET["ElectionCode"];
                $search = "SELECT * FROM electioncode INNER JOIN votingcode ON votingcode.VotingCode = electioncode.AreaCode WHERE  ElectionCode = '".$_GET["ElectionCode"]."'";
                include_once('../db/dbconnect.php');
                $result = getDataFromDB($search);
                foreach($result as $row){
                    if($row['Votetype'] == "City Corporation"){
                        include_once('cityresult.php');
                    }

                    elseif($row['Votetype'] == "Municipality"){
                        include_once('muniresult.php');
                    }

                    elseif($row['Votetype'] == "National"){
                        include_once('nationalresult.php');
                    }

                }

            ?>
        </div>
    </div>
</body>
</html>