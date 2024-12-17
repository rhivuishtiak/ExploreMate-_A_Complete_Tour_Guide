<?php
session_start();
?>

<html>
<head>
    <title>ExploreMate</title>
    <style>
    </style>
    <link rel = "stylesheet" href = "../css/menu.css">
</head>
<body>
    <?php
        include ('../phpValidation/check.php');
    ?>
<table style ="width: 100%" >
  <tr style="height: 200px;">
    <th style="width: 20%"></th>
    <th><img src = "../meterial/logo.png" width = "200" height = "150"></th>
    <th style="width: 20%; text-align: center">
        
        <div class = "menu">
            <ul>
                <li>
                    <a href="#"><img src = "../meterial/profile.png" width = "40" height = "40"></a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href = "editprofile.php">Profile</a></li>
                            <li><a href = "changepass.php">Change Password</a></li>
                            <li><a href = "../phpValidation/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    
        
        
    </th>
  </tr>
  <tr style="height: 400px;">
    <td>
        <table style="width: 100%">

            <tr style="height: 50px">
                <th style = "border-radius: 10px; border: 1px solid black"><a href="AvailableHotel.php">Hotel Services</a></th>
            </tr>
            <tr style="height: 50px;">
                <th style = "border-radius: 10px; border: 1px solid black"><a href="busreservation.php">Transport Services</a></th>
            </tr>
            <tr style="height: 50px;">
                <th style = "border-radius: 10px; border: 1px solid black">Offer</th>
            </tr>
            <tr style="height: 50px;">
                <th style = "border-radius: 10px; border: 1px solid black"><a href="packages.php">Pakeages</a></th>
            </tr>
            <tr style="height: 50px;">
                <th style = "border-radius: 10px; border: 1px solid black">Coustomer Services</th>
            </tr>
            <tr style="height: 50px;">
            <th style = "border-radius: 10px; border: 1px solid black"><a href="about.php">About Us</a></th>
            </tr>
            <tr style="height: 50px;">
                <td>
                </td>
            </tr>
            <tr style="height: 50px;">
                <td>
                </td>
            </tr>
        </table>

    </td>
    <td>
        <table style="width:100%">
            <tr style="height: 200px;">
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr style="height: 200px;">
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>

    </td>
    <td>
    <table style="width:100%">
            <tr style="height: 200px;">
                <td>
                </td>
            </tr>
            <tr style="height: 200px;">
                <td>
                </td>
            </tr>
        </table>        
    </td>
  </tr>
  <tr style="height: 100px;">
    <td colspan="3" style="text-align: center"><p> &copy; ExploreMate A Complete Tour Guide. All rights reserved.</p></td>
    
  </tr>
</table>
</body>