<?php 


require_once "include/common.php";
include 'header.php';

$booking = new BookingDAO($bookings);
$result = $booking->editBookingtoAccepted($_GET['bookingid']);
// $salons = new SalonDAO($salon);
// $salons->reduceAvailability($_GET['sessionid']);
$notification = new NotificationDAO($notification_link);
$local_user = new UserDAO($user);
$user_data = $local_user->retrieveUser($_GET['uid']);
$notification->sendTelegram("Your booking (ID {$_GET['bookingid']}) has been accepted");
$notification->sendEmail($user_data['Email'],"Your booking (ID {$_GET['bookingid']}) has been accepted");

if ($result != "Error" & isset($result)){
    echo "<h3>Booking has been accepted</h3>";
}
else{
    echo "Whoops something went wrong";
}

include 'footer.php';
?>





