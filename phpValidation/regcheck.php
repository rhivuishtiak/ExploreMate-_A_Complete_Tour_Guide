<?php
include("../database/connection.php");

$fnameErr = $emailErr = $genderErr = $dobErr = $unameErr = $passwordErr = $rpasswordErr="";
$fullName = $email = $gender = $dob  = $userName = $password = $rpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["fullname"])) 
    {
        $fnameErr = "Name is required";
    } 
  else 
    {
     $fullName = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)) 
            {
                $fnameErr = "Only letters and white space allowed";
            }
    }
  
  if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
    }
  else 
    {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $emailErr = "Invalid email format";
            }
    }

  if (empty($_POST["gender"])) 
    {
        $genderErr = "Gender is required";
    } 
  else 
    {
        $gender = test_input($_POST["gender"]);
    }

  if (empty($_POST["dob"])) 
    {
        $dobErr = "Gender is required";
    } 
  else 
    {
        $dob = test_input($_POST["dob"]);
    }

  if (empty($_POST["userName"]))
  {
      $unameErr = "Username id required";
  }
  else 
  {
      $userName = test_input($_POST["userName"]);
  }

  if (empty($_POST["password"]))
    {
        $passwordErr = "Password id required";
    }
  else 
    {
        $password = test_input($_POST["password"]);
    }
  if (empty($_POST["rpassword"]))
    {
        $rpasswordErr = "Password id required";
    }
  else 
    {
        $rpassword = test_input($_POST["rpassword"]);
    }

    if(!empty($fullName) && !empty($email) && !empty($gender) && !empty($dob) && !empty($userName) && !empty($password) && !empty($rpassword))
    {
        $check_query = "SELECT * FROM userinfo WHERE user_name='$userName'";
        $result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($result) > 0) 
            {
                $unameErr = "Username already exists.";
            } 
        else 
            {
                if($password == $rpassword)
                {
                    $query = "INSERT INTO userinfo (user_name, password, full_name, email, dob, Gender) VALUES ('$userName', '$password', '$fullname', '$email', '$dob', '$gender')";
                    mysqli_query($con, $query);
                    header("Location: login.php");
                    die;
                }
                else 
                {
                    $rpasswordErr = "Password does not match";
                }            
            }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 