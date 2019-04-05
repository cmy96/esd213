<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

$booking = new BookingDAO($bookings);
$results = $booking->retrieveAll();
$salons = new SalonDAO($salon);
echo "<table class='table'><tr><th>Booking ID</th><th>Booking location</th><th>Timing</th><th>Status</th><th>User</th><th>Edit</th></tr>";
foreach ($results['Booking'] as $booking){
    $data = $salons->retrieveBySessionId($booking['SessionID']); 
    $date = new DateTime($booking['Date']);
    echo "<tr><td>{$booking['bookingID']}</td>";
    echo "<td>{$data['Description']}</td>";
    echo "<td>{$date->format('Y-m-d h:m:s')}</td>";
    echo "<td>{$booking["Status"]}</td>";
    echo "<td><a href='view-user.php?uid={$booking["UID"]}'>{$booking["UID"]}</a></td>";
    if ($booking['Status'] == "Open"){
      echo "<td><a href='accept_booking.php?bookingid={$booking['bookingID']}&uid={$booking['UID']}&sessionid={$booking['SessionID']}&date={$date->format('Y-m-d h:m:s')}&status={$booking["Status"]}' class='btn-sm'>Change</a></td>";
    }
    else{
      echo "<td></td>";
    }

    echo "</tr>";
}

echo "</table>";
include 'footer.php';
?>





