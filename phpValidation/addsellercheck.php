<?php 

$json = $_POST['data'];
$bus = json_decode($json);
    $departureCity = $bus->departureCity;
    $arrivalCity = $bus->arrivalCity;
    $Departure = $bus->Departure;
    $numberOfSeats = $bus->numberOfSeats;
    

    if ($departureCity != null && $arrivalCity != null && $Departure != null && $numberOfSeats) {
$users = ['departureCity'=> $departureCity,'arrivalCity'=> $arrivalCity, 'Departure'=>$Departure,'numberOfSeats'=> $numberOfSeats];
echo "invalid user!";
if($users){
    header("Location: ../view/availablebuses.php");
}else{
	echo "invalid user!";
}          }

?>