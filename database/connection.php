<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "exploremate";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
