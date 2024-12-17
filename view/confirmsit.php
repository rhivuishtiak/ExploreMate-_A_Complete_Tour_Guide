<?php
// confirmsit.php

// Check if the 'bus_id' parameter is set in the URL
if (isset($_GET['bus_id'])) {
    // Get the bus ID from the URL
    $busId = $_GET['bus_id'];
    echo "Bus booo ID: " . $busId;
    // Database connection (similar to your existing code)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "addbus";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the bus status to 'booked'
    $updateSql = "UPDATE addbus SET statusbus = 'booked' WHERE busName = '${busId}' ";
    $conn->query($updateSql);

    // Close the database connection
    $conn->close();

    // Redirect to a confirmation page or perform any other necessary action
    header("Location: booking_successful.php?bus_name={$_GET['bus_id']}");

    exit();
} else {
    // Handle cases where the 'bus_id' parameter is not set
    echo "Invalid request.";
}
?>
