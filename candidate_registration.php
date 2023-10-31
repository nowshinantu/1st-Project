<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin/css/dashboard.css">
    <link rel="stylesheet" href="admin/css/candidate_registration.css">
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            
        </div>
        <div class="main_section">
        <div class="main_part">
            <p>Candidate Registration Form</p>
            <form action="server/candidate_server.php" method="post">
            <div class="start">
            <div class="main">Candidate Name:</div>
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

            <!-- <div class="start">
            <div class="main">User Role:</div>
            <div class="some">
                <select name="userrole">
                    <option selected disabled>Select UserRole</option>
                    <option value="Admin">Admin</option>
                    <option value="Voter">Voter</option>
                </select>
                </div>
            </div> -->

            <div class="start">
            <div class="main">Address:</div>
            <div class="some"><textarea name="address" cols="29" rows="3" ></textarea>
              </div>  
</div>

              <div class="start">
            <div class="main">Nomination Area</div>
            <div class="some">
              <select name="AreaCode">
                  <option value="">Select an area code</option>
                <?php 
                $sql = "SELECT * FROM votingcode";
                include_once('db/dbconnect.php');
                $res = getDataFromDB($sql);
                foreach($res as $row){
                    ?>
                        <option value="<?php echo $row["VotingCode"] ?>"><?php echo $row["VotingCode"] ?></option>
                    <?php
                }
                ?>
                </select>
              </div>
            </div>
            <div class="start">
            <div class="main">Nomination For</div>
            <div class="some">
                <select name="NominationType" id="">
                    <option value="">Select an option</option>
                    <option value="Mayor">Mayor</option>
                    <option value="Councelor">Councelor</option>
                    <option value="Female Councelor">Female Councelorr</option>
                    <option value="Chairman">Chairman</option>
                    <option value="Commissioner">Commissioner</option>
                    <option value="Female Commissioner">Female Commissioner</option>
                    <option value="Member of Parliament">Member of Parliament</option>
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