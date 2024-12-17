<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <?php
        include ("../phpValidation/profile.php");
        ?>
    <center>
   <div style="width: 300px; margin: 100px; padding: 20px; border: 1px solid #ccc; text-align: center;">
    <h2>Edit Profile</h2>

    <form method="post">
        <label for="fullname">Full Name</label><br>
        <input type="text" id="fullname" name="fullname" placeholder="Full name" value="<?php echo $fullName;?>" require><br>
        
         
        
        <label for="date">Date Of Birth </label><br>
        <input type="date" id="dateOfBirth" name="dob" placeholder="mm/dd/yyyy" value="<?php echo $dob;?>" require><br>
        

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Email" value="<?php echo $email;?>" require><br>
        

        <label for="password"> Confirm Password:</label><br>
        <input type="password" id="password" name="password" placeholder="" require><br><br>

    
        <input type="submit" value="Update Profile">
    </form>

  </div>


</body>
</html>