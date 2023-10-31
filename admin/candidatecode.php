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
                <h2>Area Code</h2>
                <form action="server/candidatecode.php" method="POST">
                <div class="title">Serial No</div>
                <div class="input">
                <input type="text" name="SerialNo" value="<?php echo $_GET["serialno"] ?>" readonly>
                </div>
                <div class="title" style="width:29%">Candidate Code</div>
                <div class="input">
                <input type="text" name="CandidateCode">
                </div>
                <div class="title" style="width:29%">Election Code</div>
                <div class="input">
                <select name="ElectionCode" id="">
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
                <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>