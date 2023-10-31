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
        <div class="column-first">
            <div class="avater">

            </div>
            <?php
            function name($email){
                $sql = "SELECT * FROM pratice WHERE email = '".$email."'";
                include_once('../db/dbconnect.php');
                $res = getDataFromDB($sql);
                foreach($res as $row){
                    return $row['Cname'];
                } 
            }
        ?>
            <h2 style="padding-top: 20px; text-align: center"  class="animate__animated animate__slideInLeft"><span style="color: red"> <?php echo name($_SESSION["email"]); ?></span></h2>
            
        </div>
        <div class="column-second">
            <div class="menu-section">
                <div class="imgbox">
                    <img src="../assets/images/city.jfif" alt="">
                </div>
                <div class="title">
                   <h1> <a href="citycorporation.php">City Corporation </a></h1>
                </div>
            </div>
            <div class="menu-section">
                <div class="imgbox">
                    <img src="../assets/images/rural.jpg" alt="">
                </div>
                <div class="title">
                   <h1> <a href="municipality.php">Municipality Election</a></h1>
                </div>
            </div>
            <div class="menu-section">
                <div class="imgbox">
                    <img src="../assets/images/national.png" alt="">
                </div>
                <div class="title">
                   <h1> <a href="national.php">National Election</a></h1>
                </div>
            </div>
            
           
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