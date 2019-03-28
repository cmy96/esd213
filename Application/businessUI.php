<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi Business User</h2>";

$dummy_output = '
{       	
    "Booking": [
        {
            "bookingID": "01",
            "UID": "01",
            "SessionID": "03",
            "Date": "2019-03-21 10:0:0",
            "Status": "closed"
        },
        {
            "bookingID": "02",
            "UID": "01",
            "SessionID": "05",
            "Date": "2019-03-21 10:0:0",
            "Status": "open"
        }
    ]
}
';

$results = json_decode($dummy_output,true);
$selection = ["open","accepted","closed"];
echo "<form action = 'b_process_booking.php' method = 'GET'><table class='table'><tr><th>Booking location</th><th>Timing</th><th>Status</th></tr>";
foreach ($results['Booking'] as $booking){
    echo "<tr><td>{$booking['bookingID']}</td><td>{$booking['Date']}</td><td><select name = '{$booking['bookingID']}'>";
    
    foreach ($selection as $option){
      echo "<option value = '{$option}'";
      if ($booking["Status"] == $option){
        echo "selected";
      }
      echo ">$option</option> ";
    }
    echo "</select></td></tr>";
}


echo "<tr><td><input type='submit'/></td><td></td><td></td></tr></table></form>";
include 'footer.php';
?>





