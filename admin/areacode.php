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
                <form action="server/areacode.php" method="POST">
                <div class="title">Type of election</div>
                <div class="input">
                <select name="Type" id="">
                    <option value="">Select a type</option>
                    <option value="City Corporation">City Corporation</option>
                    <option value="Municipality">Municipality</option>
                    <option value="National">National</option>
                </select>
                </div>
                <div class="title" >Area</div>
                <div class="input">
                <select name="Area" id="">
                    <option value="">Select an area</option>
                    <?php
                        $searchsql = "SELECT * FROM areacode";
                        include_once('../db/dbconnect.php');
                        $result = getDataFromDB($searchsql);

                        foreach($result as $row){
                            ?>
                                <option value="<?php echo $row['AreaCode'] ?>"><?php echo $row['AreaCode'].' - '.$row['AreaName'] ?></option>
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