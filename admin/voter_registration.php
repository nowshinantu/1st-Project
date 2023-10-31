<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/voter_registration.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
        <div class="nothing">
        <h2>Voter Registration Form</h2>
        <form action="server/registration_server.php" method="post">

            <div class="start">
            <div class="main">Voter Name:</div>
            <div class="some"><input type="text" name="Cname" required></div>
            </div>

            <div class="start">
            <div class="main">Father's Name:</div>
            <div class="some"><input type="text" name="Fname"></div>
            </div>

            <div class="start">
            <div class="main">Mother's Name:</div>
            <div class="some"><input type="text" name="Mname"></div>
            </div>

            <div class="start">
            <div class="main">Email:</div>
            <div class="some"><input type="email" id="email" name="email" required></div>
            </div>

            <div class="start">
            <div class="main">Date of birth:</div>
            <div class="some"><input type="date" name="birthdate"></div>
            </div>

            <div class="start">
            <div class="main">Phone Number:</div>
            <div class="some"><input type="number" name="PNumber"></div>
            </div>

            <div class="start">
            <div class="main">Gender:</div>
            <div class="some">
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </div>

            <div class="start">
            <div class="main">Blood Group:</div>
            <div class="some">
              <select name="Bgroup">
                <option selected disabled>Select Your Blood Group:</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
                </select>
              </div>
            </div>

            <div class="start">
            <div class="main">NID No:</div>
            <div class="some"><input type="number" name="nid" required></div>
            </div>
            <div class="start">
            <div class="main">Password:</div>
            <div class="some"><input type="password" name="password" required></div>
            </div>

            <div class="start">
            <div class="main">User Role:</div>
            <div class="some">
                <select name="userrole">
                    <option selected disabled>Select UserRole</option>
                    <option value="Admin">Admin</option>
                    <option value="Voter">Voter</option>
                </select>
                </div>
            </div>

            <div class="start">
            <div class="main">Address:</div>
            <div class="some"><textarea name="address" cols="29" rows="3" ></textarea>
</div>
              </div>  
              <div class="start">
            <div class="main">National Election</div>
            <div class="some">
            <select name="NationalAreaCode" id="">
                    <option value="">Select an area code</option>
                    <?php
                    $sql = "SELECT * FROM areacode WHERE AreaType = 'National'";
                    include_once('../db/dbconnect.php');
                    $res = getDataFromDB($sql);
                    foreach($res as $row){
                        ?>
                            <option value="<?php echo $row["AreaCode"] ?>"><?php echo $row["AreaCode"].' - '.$row["AreaName"] ?></option>
                        <?php
                    }
                
                    ?>
                </select>
                </div>
            </div>

            <div class="start">
            <div class="main">Other Election Area:</div>
            <div class="some">
            <select name="AreaCode" id="">
                    <option value="">Select an area code</option>
                    <?php
                    $sql = "SELECT * FROM areacode WHERE AreaType != 'National'";
                    include_once('../db/dbconnect.php');
                    $res = getDataFromDB($sql);
                    foreach($res as $row){
                        ?>
                            <option value="<?php echo $row["AreaCode"] ?>"><?php echo $row["AreaCode"].' - '.$row["AreaName"] ?></option>
                        <?php
                    }
                
                    ?>
                </select>
                </div>
            </div>
            <div class="any">
                <input type="submit" value="Sign Up">
            </div>

        </form>
        </div>
        </div>
    </div>
</body>
</html>