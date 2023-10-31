<?php
    session_start();
    if($_SESSION["user_role"]=='Voter' AND $_SESSION["flag"]=='running'){

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="header">

<div class="middle"><h1>Online Voting System</h1></div>
<div class="right">
<button> <i class="fa fa-home"></i> Home</button>
<button> <i class="fa fa-wrench"></i> <a href="profile.php"  style="text-decoration:none; color: black">Profile</a></button>
    <button> <i class="fa fa-power-off"></i><a  style="text-decoration:none; color: black" href="signout.php"> Log Out</a></button>
</div>
    </div>
    <div class="container">
        <div style=" float: none; margin: 0px auto;" class="column-first">
            <h2 align="center">Change Password</h2>
            <form action="server/passwordchange.php" method="POST">
                <p>Old Password</p>
                <input type="password" name="OldPass">
                <p>New Password</p>
                <input type="password" name="NewPass">
                <p>Confirm Password</p>
                <input type="password" name="conPass">
                <button type="submit">Submit</button>
            </form>
        </div>
       
    </div>
</body>
</html>

<?php
}
else{
    header("Location: ../index.php");
}
?>