<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

echo "<table class='table'><tr><th>Booking ID</th><th>Booking location</th><th>Timing</th><th>Status</th><th>Accept</th></tr>";
$date = new DateTime($_GET['date']);
echo "<tr><td>{$_GET['bookingid']}</td>";
echo "<td>{$_GET['sessionid']}</td><td>{$date->format('Y-m-d h-m-s')}</td>";
echo "<td>{$_GET['status']}</td>";
echo "<td><a href='accept_booking2.php?bookingid={$_GET['bookingid']}&uid={$_GET['uid']}&sessionid={$_GET['sessionid']}&date={$_GET['date']}&status={$_GET["status"]}' class='btn-sm'>Accept</a></td>";
echo "</tr></table>";


include 'footer.php';
?>





