<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="../css/reg.css">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>
        <?php
            include("../phpValidation/regcheck.php");
        ?>
        <div class="register-now">
            <form method="post">
                <h2>Register</h2>
                <div class="input-style">
                    <label for="FullName">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Full name" value="<?php echo $fullName;?>">
                    <span class="error"> <?php echo $fnameErr;?></span> <br>
                    <label for="Email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Email" value="<?php echo $email;?>">
                    <span class="error"> <?php echo $emailErr;?></span> <br>
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dateOfBirth" name="dob" placeholder="mm/dd/yyyy" value="<?php echo $dob;?>">
                    <span class="error"> <?php echo $dobErr;?></span> <br>
                    <label for="UserName">Username:</label>
                    <input type="text" id="userName" name="userName" placeholder="Username"value="<?php echo $userName;?>">
                    <span class="error"> <?php echo $unameErr;?></span> <br>
                    <label for="Password">Password:</label>
                    <input type="text" id="password" name="password" placeholder="Password">
                    <span class="error"> <?php echo $passwordErr;?></span> <br>
                    <label for="ReEnterPassword">Confirm Password:</label>
                    <input type="text" id="rpassword" name="rpassword" placeholder="Confirm Password">
                    <span class="error"> <?php echo $rpasswordErr;?></span> <br>
                    <div class="gender">
                        <p>Gender:</p> 
                        <div class="option">
                            
                            <label for="male">Male</label> 
                            <input type="radio" id="male"  name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                            
                            
                            <input type="radio" id="female"  name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                            <label for="female">Female</label>
                            
                        </div>
                    </div>
                    <div class="register-page">
                        <input type="submit" value="Register"><br>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
