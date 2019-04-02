<?php
require_once "include/common.php";
include 'header.php';
?>

<body>
<div class="container p-4 m-1" >

<?php
$uid = "0";
$sessionid = $_GET["sessionID"];
$date = $_GET['timeslot'];
$status = 'open';
$location = $_GET['location'];
$bid = $_GET['bid'];

$booking = new BookingDAO($bookings);

$output = $booking->makeBooking(0,$uid,$sessionid,$date,$status,$location,$bid);
echo "<br/>";
// var_dump($output);
// var_dump($booking->retrieveAll());

// $dummy_output = '
// {       	
//     "response":"201",
//     "bookingID": "1",
//     "Status":"Open"
// }';

if ($output !== "Error"){
    echo"<h3>Sucessfully created booking</h3>
    <br/>
    <h4>ID {$output['bookingID']}</h4>";
}
else{
    echo "Oops something went wrong";
}

?>
</div>
</body>

<?php 
include "footer.php";
?>




</html>