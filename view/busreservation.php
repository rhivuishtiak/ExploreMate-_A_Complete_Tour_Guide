<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Seller</title>
    <script src="../JS/validation.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 2px solid #4caf50;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 24px;
            color: #4caf50;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form onsubmit="return Sellervalidate(event)">
        <fieldset>
            <legend>Bus Reservation</legend>

            <div class="form-group">
                <label for="departureCity">Departure City:</label>
                <select name="departureCity" id="departureCity">
                    <option value="" disabled selected>Select city</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
                <div id="p"></div>
            </div>

            <div class="form-group" style="display: flex">
                <label for="arrivalCity">Arrival city:</label>
                <select name="arrivalCity" id="arrivalCity">
                    <option value="" disabled selected>Select city</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
                <p id="a"></p>
            </div>

            <div class="form-group" style="display: flex">
                <label for="departureDate">Departure Date:</label>
                <input type="date" name="departureDate" id="departureDate">
                <div id="r"></div>
            </div>

            <div class="form-group" style="display: flex">
                <label for="numberOfSeats">Number of Seats:</label>
                <input type="number" name="numberOfSeats" id="numberOfSeats" min="1" max="4">
                <div id="t"></div>
            </div>

            <div class="form-group">
                <input type="submit" name="" id="submit" value="Submit" onclick="return ajax()" />
            </div>
        </fieldset>
    </form>

</body>
</html>
