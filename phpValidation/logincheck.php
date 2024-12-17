<?php
    session_start();
    include("../database/connection.php");
    include("function.php");

    $unameErr = $passwordErr = "";
    $userName = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
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

        if(!empty($userName) && !empty($password))
        {
           $querry = "select * from userinfo where user_name = '$userName'";
           $result = mysqli_query($con, $querry);
    
           if($result)
           {
            if($result && mysqli_num_rows($result)> 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {
                  $_SESSION['user_name'] = $user_data['user_name'];
                  header("Location: dashbord.php");
                  die;
                }
            }
          }
           echo "Incorret password or username";
           
        }
    }

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>