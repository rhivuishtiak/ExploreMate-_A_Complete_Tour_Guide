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

        h2 {
            color: #4caf50;
        }

        .success-message {
            color: #4caf50;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .pay-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .pay-button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Booking Successful</title>
</head>
<body>

    <div class="container">
        <h2>Booking Successful</h2>
        <p class="success-message">Your bus has been successfully booked!</p>
        
        <p>Bus Details:</p>
        <ul>
            <li><strong>Bus Name:</strong> <?php echo isset($_GET['bus_name']) ? $_GET['bus_name'] : ''; ?></li>
            <!-- Add other bus details as needed -->
        </ul>

        <button class="pay-button" onclick="redirectToPayment()">Pay Now</button>
    </div>

    <script>
        function redirectToPayment() {
            // Add your payment page URL here
            window.location.href = 'payment.php';
        }
    </script>

</body>
</html>
