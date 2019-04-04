<?php

require_once "include/common.php";


include 'header.php';
include 'credentials.php';
?>

<body>
<?php

$booking = new BookingDAO($bookings);
$result = $booking->editBookingtoPaid($_GET['bookingid']);
$payment = new PaymentDAO($payment_link);
$time = date("Y-m-d\Th:i:s");
$result = $payment->makeBooking($_GET['bookingid'],$time,$_GET['payment']);
echo "<h4>Your transaction was successful</h4>";


?>

</body>


<?php 
include "footer.php";
?>




</html>