<?php 


require_once "include/common.php";
include 'header.php';



echo "<h2>Hi {$_SESSION['username']}</h2>";

$dummy_output = '
{       	
    "Booking": [
        {
            "bookingID": "01",
            "UID": "01",
            "SessionID": "03",
            "Date": "2019-03-21 10:0:0",
            "Status": "open"
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
// var_dump($results);
echo "<table class='table'><tr><th>Booking location</th><th>Timing</th><th>Status</th></tr>";
foreach ($results['Booking'] as $booking){
    echo "<tr><td>{$booking['bookingID']}</td><td>{$booking['Date']}</td><td>{$booking['Status']}</td></tr>";
}
echo "</table>";
?>





