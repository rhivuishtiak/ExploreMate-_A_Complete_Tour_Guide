<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bus</title>
</head>
<body>

    <h2>Add Bus</h2>
    <form action="../phpValidation/add_bus.php" method="post">
        <label for="busName">Bus Name:</label>
        <input type="text" name="busName" required><p>

        <label for="departureCity">Departure City:</label>
        <input type="text" name="departureCity" required><p>

        <label for="arrivalCity">Arrival City:</label>
        <input type="text" name="arrivalCity" required><p>

        <label for="departureTime">Departure Time:</label>
        <input type="time" name="departureTime" required><p>

        <label for="arrivalTime">Arrival Time:</label>
        <input type="time" name="arrivalTime" required><p>

        <label for="departureDate">Departure Date:</label>
        <input type="date" name="departureDate" required><p>

        <button type="submit">Add Bus</button>
    </form>

</body>
</html>

