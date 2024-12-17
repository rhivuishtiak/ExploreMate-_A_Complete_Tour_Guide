<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addbus";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $busName = $_POST['busName'];
    $departureCity = $_POST['departureCity'];
    $arrivalCity = $_POST['arrivalCity'];
    $departureTime = $_POST['departureTime'];
    $arrivalTime = $_POST['arrivalTime'];
    $departureDate = $_POST['departureDate'];

    // Insert data into the 'buses' table
    $sql = "INSERT INTO buses (bus_name, departure_city, arrival_city, departure_time, arrival_time, departure_date)
            VALUES ('$busName', '$departureCity', '$arrivalCity', '$departureTime', '$arrivalTime', '$departureDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Bus added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>