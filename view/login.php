<!DOCTYPE html>
<html>
  <head>
    <style>
        .error {color: #FF0000;}
    </style>
    <title>Login</title>
      <link rel="stylesheet" type="text/css" href="../css/loginCss.css">
    
  </head>
    <body>
      <?php
      include ('../phpValidation/logincheck.php');
      ?>
      <div class="loginbox">
        <img src="../meterial/login.png" class="avatar">
        <h1> Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <p>Username</p>
          <input type="text" id="userName" name="userName" placeholder="Enter Username" value="<?php echo $userName;?>">
          <span class="error"> <?php echo $unameErr;?></span> <br>
          <p>Password</p>
          <input type="password" id="password" name="password" placeholder="Enter Password">
          <span class="error"> <?php echo $passwordErr;?></span><br>
          <input type="submit" value="Login">
          <p1><a href="forgot.php">Forget Password </a> </p1><br>
          <p1>Don't Have a Accout ? Registration <a href="registration.php">here</a></p1>
        </form>

      </div>

    </body>

</html>