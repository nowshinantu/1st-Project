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
                <h2>Area Wise Citizen List</h2>
                <form action="citizen_fetch.php">
                <div class="title" style="margin-top: 15px">Select a voting area</div>
                <div class="input">
                <select name="Area" id="">
                    <option value="">Select an area code</option>
                    <?php
                    $sql = "SELECT * FROM votingcode INNER JOIN areacode on votingcode.AreaCode = areacode.AreaCode";
                    include_once('../db/dbconnect.php');
                    $res = getDataFromDB($sql);
                    foreach($res as $row){
                        ?>
                            <option value="<?php echo $row["AreaCode"] ?>"><?php echo $row["AreaName"].' - '.$row["AreaType"].'('.$row["AreaCode"].')' ?></option>
                        <?php
                    }
                
                    ?>
                </select>
                </div>
                <button type="submit">Search</button>
                </form>
                <h3><a href="voter_registration.php">Register New</a></h3>
            </div>
        </div>
    </div>
</body>
</html>