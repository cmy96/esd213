<?php 


require_once "include/common.php";
include 'header.php';

// hardcoded uid
$uid = 1;
$local_user = new UserDAO($user);
$booking = new BookingDAO($bookings);

$user_details = $local_user->retrieveUser($uid);
echo "<h2 class='text'>Hi {$user_details['Name']}</h2>";

// $dummy_output = '
// {       	
//     "Booking": [
//         {
//             "bookingID": "01",
//             "UID": "01",
//             "SessionID": "03",
//             "Date": "2019-03-21 10:0:0",
//             "Status": "open"
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

$results = $booking->retrieveById($uid);

// $results = json_decode($dummy_output,true);
// var_dump($results);
echo "<table class='table'><tr><th>ID</td><th>Booking location</th><th>Timing</th><th>Status</th></tr>";
foreach ($results['Booking'] as $booking){
    $date = new DateTime($booking['Date']);
    echo "<tr><td>{$booking['bookingID']}</td><td>{$booking['Location']}</td><td>{$date->format('Y-M-d h-m-s')}</td><td>{$booking['Status']}</td></tr>";
}
echo "</table>";
?>





