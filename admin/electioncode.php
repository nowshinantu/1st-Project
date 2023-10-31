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
                <h2>Election Activation Code</h2>
                <form action="server/electioncode.php" method="POST">
                    <div class="title">
                        Election Code
                    </div>
                    <div class="input">
                        <input type="text" name="ElectionCode">
                    </div>
                    <div class="title">
                        Voting Code
                    </div>
                    <div class="input">
                         <select name="AreaCode" id="" style="margin-left: 0px">
                            <option value="">Select a voting code</option>
                            <?php
                            $sql = "SELECT * FROM votingcode INNER JOIN areacode ON areacode.AreaCode=votingcode.AreaCode";
                            include_once('../db/dbconnect.php');
                            $res = getDataFromDB($sql);
                            foreach($res as $row){
                                ?>
                                    <option value="<?php echo $row["VotingCode"] ?>"><?php echo $row["VotingCode"]." >>".$row["AreaName"] ?></option>
                                <?php
                            }
                        
                            ?>
                        </select>
                    </div>
                    <div class="title">
                        Election Date
                    </div>
                    <div class="input">
                        <input type="date" name="ElectionDate">
                    </div>
                <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>