<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

$booking = new BookingDAO($bookings);
$results = $booking->retrieveAll();
$businessID = 1;
// $dummy_output = '
// {       	
//     "Booking": [
//         {
//             "bookingID": "01",
//             "UID": "01",
//             "SessionID": "03",
//             "Date": "2019-03-21 10:0:0",
//             "Status": "closed"
//         },
//         {
//             "bookingID": "02",
//             "UID": "01",
//             "SessionID": "05",
//             "Date": "2019-03-21 10:0:0",
//             "Status": "open"
//         }
//     ]
// }
// ';

// $results = json_decode($dummy_output,true);
// $selection = ["open","accepted","closed"];
echo "<table class='table'><tr><th>Booking ID</th><th>Booking location</th><th>Timing</th><th>Status</th><th>Edit</th></tr>";
foreach ($results['Booking'] as $booking){
    $date = new DateTime($booking['Date']);
    echo "<tr><td>{$booking['bookingID']}</td>";
    echo "<td>{$booking['SessionID']}</td><td>{$date->format('Y-m-d h-m-s')}</td>";
    echo "<td>{$booking["Status"]}</td>";
    echo "<td><a href='accept_booking.php?bookingid={$booking['bookingID']}&uid={$booking['UID']}&sessionid={$booking['SessionID']}&date={$booking['Date']}&status={$booking["Status"]}' class='btn-sm'>Change</a></td>";
    echo "</tr>";
}


echo "<tr><td><input type='submit'/></td><td></td><td></td></tr></table>";
include 'footer.php';
?>





