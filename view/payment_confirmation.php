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
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4caf50;
        }

        .confirmation-message {
            color: #4caf50;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .back-to-home {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-to-home:hover {
            background-color: #45a049;
        }
    </style>
    <title>Payment Successful</title>
</head>
<body>

    <div class="container">
        <h2>Payment Successful</h2>
        <p class="confirmation-message">Thank you for your payment. Your transaction was successful!</p>

        <a href="dashbord.php" class="back-to-home">Back to Home</a>
    </div>

</body>
</html>
