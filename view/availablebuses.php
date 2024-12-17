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

// Retrieve data from the 'buses' table
$sql = "SELECT * FROM addbus WHERE statusbus = 'available'";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    // Fetch associative array
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    $rows = [];
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
    <title>Display Buses</title>
</head>
<body>

    <div class="container">
        <h2>Bus Table</h2>

        <?php if (!empty($rows)): ?>
            <table>
                <tr>
                    
                    <th>Bus Name</th>
                    <th>Departure City</th>
                    <th>Arrival City</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Departure Date</th>
                    <th>Status</th>
                    <th>action</th>
                </tr>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?= $row['busName'] ?></td>
                        <td><?= $row['departureCity'] ?></td>
                        <td><?= $row['arrivalCity'] ?></td>
                        <td><?= $row['departureTime'] ?></td>
                        <td><?= $row['arrivalTime'] ?></td>
                        <td><?= $row['departureDate'] ?></td>
                        <td><?= $row['statusbus'] ?></td>
                        <td>
                        <a href="confirmsit.php?bus_id=<?= $row['busName'] ?>">Book Now</a>
                        

        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No data available in the 'buses' table.</p>
        <?php endif; ?>
    </div>

</body>
</html>