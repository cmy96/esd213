<?php 


require_once "include/common.php";
include 'header.php';

$booking = new BookingDAO($bookings);
// var_dump($booking->retrieveAll());
$result = $booking->editBooking($_GET['bookingid'],$_GET['uid'],1);
// echo "<td><a href='accept_booking2.php?bookingid={$_GET['bookingid']}&uid={$_GET['uid']}&sessionid={$_GET['sessionid']}&date={$_GET['date']}&status={$_GET["status"]}' class='btn-sm'>Accept</a></td>";

if ($result != "Error"){
    echo "<h3>Booking has been accepted</h3>";
}
else{
    echo "Whoops something went wrong";
}

// echo "<tr><td><input type='submit'/></td><td></td><td></td></tr></table>";
include 'footer.php';
?>





