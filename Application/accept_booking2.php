<?php 


require_once "include/common.php";
include 'header.php';

$booking = new BookingDAO($bookings);
$result = $booking->editBookingtoAccepted($_GET['bookingid']);
$salons = new SalonDAO($salon);
$salons->reduceAvailability($_GET['sessionid']);
if ($result != "Error" & isset($result)){
    echo "<h3>Booking has been accepted</h3>";
}
else{
    echo "Whoops something went wrong";
}

include 'footer.php';
?>





