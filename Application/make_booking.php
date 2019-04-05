<?php

require_once "include/common.php";


include 'header.php';
$salons = new SalonDAO($salon);
$location = $salons->retrieveBySessionId($_GET['sessionID']);

?>
<body>
<div class="container" >
  <div class="p-4 m-1">
  <h3 >You have selected: </h3>
  <table class="table">
  <?php
  $date = new DateTime($_GET['timeslot']);
  echo"
  <tr>
  <td>Salon Name</td>
  <td>{$_GET['name']}</td>
  </tr>
  <tr>
  <td>Timeslot</td>
  <td>{$date->format('Y-M-d h-m-s')}</td>
  </tr>
  <tr>
  <td>Location</td>
  <td>{$location['Description']}</td>
  </tr>
  <tr>
  <td></td>
  <td><a class='btn btn-primary' href='process_booking.php?bid={$_GET['bid']}&sessionID={$_GET['sessionID']}&timeslot={$_GET['timeslot']}&location={$_GET['location']}'>Confirm</a></td>
  </tr>";
  ?>
  </table>
  </div>
</div>
</body>

<?php 
include "footer.php";
?>




</html>