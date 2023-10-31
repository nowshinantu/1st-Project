<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      
        <img src="assets/images/index.jpg" alt="">
      
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <form action="login.php" method="post">
          <p>
            <input type="text" placeholder="Email" name="email" required>
          </p>
          <p>
            <input type="password" placeholder="Password" name="password" required>
          </p>
          <p>
            <input class="btn" type="submit" value="Sign In" />
          </p>
          <p>
            <a href="candidate_registration.php">Add Candidate</a>
            <a href="voter_registration.php">New Register</a></p>
          
        </form>
      </div>
    </div>
  </div>
 
</div>
</body>
</html>