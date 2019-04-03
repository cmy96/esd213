<?php 


require_once "include/common.php";
include 'header.php';

// hardcoded uid
$uid = 1;
$local_user = new UserDAO($user);
$booking = new BookingDAO($bookings);
$salons = new SalonDAO($salon);
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

$results = $booking->retrieveByUserId($uid);

// $results = json_decode($dummy_output,true);
// var_dump($results);
// var_dump($booking->retrieveBySessionId(3));
echo "<table class='table'><tr><th>ID</td><th>Name</td><th>Booking location</th><th>Timing</th><th>Status</th></tr>";
foreach ($results['Booking'] as $result){
    $session = $salons->retrieveBySessionId($result['SessionID']);
    // var_dump($session);
    $date = new DateTime($result['Date']);
    echo "<tr><td>{$result['bookingID']}</td><td>{$session['name']}</td><td>{$session['Description']}</td><td>{$date->format('Y-M-d h-m-s')}</td><td>{$result['Status']}</td></tr>";
}
echo "</table>";
?>





