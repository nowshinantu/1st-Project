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
    .column-first{
    width: 40%;
    margin-right: 10%;
    height: 70vh;
    box-shadow: 0px 0px 10px black;
    float: left;
    padding: 5vh;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
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
    </div>
</body>
</html>