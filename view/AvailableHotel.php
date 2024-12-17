<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Hotels</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<header>
        <h1>ExploreMate</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About US</a></li>
                <li><a href="#proile">Profile</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    

    <h2>Search Hotel</h2> 

<form action="/search" method="Post">
    <label for="searchQuery">Hotel Name :</label>
    <input type="text" id="searchQuery" name="q" placeholder="Enter hotel name">
    <input type="submit" value="Search">
</form>
<br><br>

    
<center>
    

        <table >

        <tr>
            <th colspan="5"><h1> Available Hotel Room</h1></th>
	     </tr>
                <tr>
                    <th>Hotel Name</th>
                    <th>Address</th>
                    <th>Rating</th>
                    <th>Price per Night</th>
                    <th>Book Now</th>
                </tr>
            
                <tr>
                    <td>Hotel ABC</td>
                    <td>123 Main St, Cityville</td>
                    <td>4.5</td>
                    <td>2000/-</td>
                    <td><a href="HotelRoom.php">Book Now</a></td>
                </tr>
                <tr>
                    <td>City Plaza Hotel</td>
                    <td>456 Oak St, Townsville</td>
                    <td>4.0</td>
                    <td>3000/-</td>
                    <td><a href="HotelRoom.php">Book Now</a></td>
                </tr>
                <tr>
                    <td>Grand View Inn</td>
                    <td>789 Pine St, Villageton</td>
                    <td>4.8</td>
                    <td>1500/-</td>
                    <td><a href="HotelRoom.php">Book Now</a></td>
                </tr>
            
        </table>
 
        <a href="dashbord.php"><h4>Back</h4></a>

        
    <footer>
        <p> &copy; ExploreMate A Complete Tour Guide. All rights reserved.</p>
    </footer>

</body>
</html>
