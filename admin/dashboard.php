<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .box{
        margin-top: 35vh;
        margin-left: 5%;
        margin-right: 5%;
    }
    .box h2{
        font-size: 42px;
        margin-bottom: 10px;
        border-bottom: 10px double red;
    }
    
    .box h1{
        font-size: 60px;

    }
    .box h1 span{
        text-shadow: 0px 0px 10px red;
        color: white;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">

        <?php
        session_start();
            function name($email){
                $sql = "SELECT * FROM pratice WHERE email = '".$email."'";
                include_once('../db/dbconnect.php');
                $res = getDataFromDB($sql);
                foreach($res as $row){
                    return $row['Cname'];
                } 
            }
        ?>
        
    <h4 style="text-align: right"><?php echo date("l").', ' . date("Y-m-d") . "<br>"; ?></h4>
    <div class="box">
            <h2  class="animate__animated animate__slideInLeft">Hello<span style="color: red"> </span></h2>
            <h1  class="animate__animated animate__slideInRight">Welcome to <br><span> ONLINE VOTING SYSTEM</span></h1>
            
        </div> </div>
    </div>
</body>
</html>