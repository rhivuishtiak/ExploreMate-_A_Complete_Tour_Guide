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

        .payment-form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
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
    <title>Payment</title>
</head>
<body>

    <div class="container">
        <h2>Payment</h2>

        <form action="process_payment.php" method="post" class="payment-form">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="submit" class="pay-button">Pay Now</button>
        </form>
    </div>

</body>
</html>
