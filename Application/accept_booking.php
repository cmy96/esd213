<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

// $selection = ["open","accepted","closed"];
echo "<table class='table'><tr><th>Booking ID</th><th>Booking location</th><th>Timing</th><th>Status</th><th>Accept</th></tr>";
// bookingid={$booking['bookingID']}&uid={$booking['UID']}&sessionid={$booking['SessionID']}&date={$booking['Date']}&status={$booking["Status"]}&location={$booking['Location']}&bid={$booking['bid']
$date = new DateTime($_GET['date']);
echo "<tr><td>{$_GET['bookingid']}</td>";
echo "<td>{$_GET['sessionid']}</td><td>{$date->format('Y-m-d h-m-s')}</td>";
// echo "<td><select name = '{$booking['bookingID']}'>";
echo "<td>{$_GET['status']}</td>";
// foreach ($selection as $option){
//   echo "<option value = '{$option}'";
//   if ($booking["Status"] == $option){
//     echo "selected";
//   }
//   echo ">$option</option> ";
// }
// echo "</select></td></tr>";
echo "<td><a href='accept_booking2.php?bookingid={$_GET['bookingid']}&uid={$_GET['uid']}&sessionid={$_GET['sessionid']}&date={$_GET['date']}&status={$_GET["status"]}' class='btn-sm'>Accept</a></td>";
echo "</tr></table>";



// echo "<tr><td><input type='submit'/></td><td></td><td></td></tr></table>";
include 'footer.php';
?>





