<?php 


require_once "include/common.php";
include 'header.php';

$local_user = new UserDAO($user);
$booking = new BookingDAO($bookings);
$salons = new SalonDAO($salon);
$user_details = $local_user->retrieveUser($uid);
echo "<h2 class='text'>Hi {$user_details['Name']}</h2>";


$results = $booking->retrieveByUserId($uid);
echo "<table class='table'><tr><th>ID</td><th>Name</td><th>Booking location</th><th>Timing</th><th>Status</th></tr>";
foreach ($results['Booking'] as $result){
    $session = $salons->retrieveBySessionId($result['SessionID']);
    $date = new DateTime($result['Date']);
    echo "<tr><td>{$result['bookingID']}</td><td>{$session['name']}</td><td>{$session['Description']}</td><td>{$date->format('Y-M-d h-m-s')}</td>";
    $status = $result['Status'];
    if ($status != "Accepted"){
        echo "<td>{$status}</td></tr>";
    }
    else{
        echo "<td>{$status}<br/><a href='./payment.php?amount=20&bookingid={$result['bookingID']}&name={$session['name']}' class='btn btn-primary'>Make payment</a></td></tr>";
    }
}
echo "</table>";
?>





