<?php
include("../database/connection.php");
include("../phpValidation/function.php");
$userName = "";
$userName = $_SESSION['user_name'];

$fnameErr = $emailErr = $dobErr = $passwordErr= "";
$fullName = $email = $dob  = $password = "";



$querry = "select * from userinfo where user_name = '$userName'";
$result = mysqli_query($con, $querry);

if($result)
           {
            if($result && mysqli_num_rows($result)> 0)
            {
                $user_data = mysqli_fetch_assoc($result);
            }
        }
        $dob = $user_data['dob'];
        $email = $user_data['email'];
        $fullName = $user_data['full_name'];


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

if (empty($_POST["dob"])) 
    {
        $dobErr = "Date of Birth is required";
    } 
else 
    {
        $dob = test_input($_POST["dob"]);
    }
              
    if(!empty($fullName) && !empty($email)  && !empty($dob) && !empty($password)){
        if($user_data['password'] === $password)
        {
            $querry1 = "update userinfo set full_name = '$fullName', email = '$email', dob ='$dob' where user_name = '$userName'";
            mysqli_query($con, $querry1);
            header ("location: dashbord.php");
            die;

        }
        else{
            $passwordErr = "Password does not match";
        } 
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>