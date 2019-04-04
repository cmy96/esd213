<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

$booking = new BookingDAO($bookings);
$results = $booking->retrieveAll();
$businessID = 1;
echo "<table class='table'><tr><th>Booking ID</th><th>Booking location</th><th>Timing</th><th>Status</th><th>Edit</th></tr>";
foreach ($results['Booking'] as $booking){
    $date = new DateTime($booking['Date']);
    echo "<tr><td>{$booking['bookingID']}</td>";
    echo "<td>{$booking['SessionID']}</td><td>{$date->format('Y-m-d h:m:s')}</td>";
    echo "<td>{$booking["Status"]}</td>";
    if ($booking['Status'] == "Open"){
      echo "<td><a href='accept_booking.php?bookingid={$booking['bookingID']}&uid={$booking['UID']}&sessionid={$booking['SessionID']}&date={$booking['Date']}&status={$booking["Status"]}' class='btn-sm'>Change</a></td>";
    }
    else{
      echo "<td></td>";
    }
    echo "</tr>";
}

echo "</table>";
include 'footer.php';
?>





