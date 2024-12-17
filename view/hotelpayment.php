<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Payment Gateway</title>
</head>
<body>

<header>
        <h1>ExploreMate</h1>
        <nav>
            <ul>
                <li><a href="dashbord.php ">Home</a></li>
                <li><a href="#about">About US</a></li>
                <li><a href="#proile">Profile</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    
        <legend><center><h2>Hotel Details</h2></legend><br>

        <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
            
                    <th>Hotel Name 
                    <th>Room Number</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="Hotel" id="Hotel">
                          <option value=""disabled selected>Select Hotel</option>
                          <option value="City Plaza Hotel">City Plaza Hotel</option>
                          <option value="Grand View Inn">Grand View Inn</option>
                          <option value="Hotel ABC">Hotel ABC</option></th>
                 </select>
                </td>
                    <td>101</td>
                    <td>2023-01-01</td>
                    <td>2023-01-05</td>
                    <td>$500</td>
                </tr>
              
            </tbody>
        </table>

        <br>
        <h2>Enter Your Details</h2>
         
        <form action="PersonalDetails" method="post">

             <label for="First Name">First Name</label> <br>
            
            <input type="text" id="First Name" name="First Name"required><br>
             <br>

             <label for="Last Name">Last Name</label> <br>
            
            <input type="text" id="Last Name" name="Last Name" required><br>
             <br>

             <label for="email">Email</label> <br>
            
            <input type="email" id="email" name="email" required><br> <br>
              
            
            <label for="Phone Number">Phone Number</label> <br>
            
            <input type="Phone Number" id="Phone Number" name="Phone Number" required><br>
             <br>

             <h2>Transpot Detalis</h2>
             <a href="busreservation.php"><h4>Transpot</h4></a>
 
            <p> Transpot cost :</p>

             <p>Total Package Cost :</p> <br><br>
        



             


        <h2>Payment Option</h2>
        

        <label>
            <input type="radio" name="Payment method" value="Bkash">Bkash
          </label>

          <label>
            <input type="radio" name="Payment method" value="nagad">nagad
          </label>

          <label>
            <input type="radio" name="Payment method" value="Rocket">Rocket
          </label>

        <form action="/payment" method="post">

              <h4>Card Payment </h4> 

            <label for="Card Number">Card Number</label> <br>
            
            <input type="text" id="cardNumber" name="cardNumber" required><br>
             <br>
            <label for="expiryDate">Expiry Date:</label> <br>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" required><br>
            <br>
            <label for="cvv">CVV:</label> <br>
            <input type="text" id="cvv" name="cvv" required><br>
            <br>
            <input type="submit" value="Pay Now">
        </form>

        <a href="HotelRoom.php"><h4>Back</h4></a>

        
    <footer>
        <p> &copy; ExploreMate A Complete Tour Guidee. All rights reserved.</p>
    </footer>

</body>
</html>
