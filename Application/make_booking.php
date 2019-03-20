<?php

require_once "include/common.php";


include 'header.php';
?>
<body>
<div class="container" >
  <div class="p-4 m-1">
  <h3 >You have selected: </h3>
  <table class="table">
  <?php
  echo"
  <tr>
  <td>Salon Name</td>
  <td>{$_GET['name']}</td>
  </tr>
  <tr>
  <td>Timeslot</td>
  <td>{$_GET['timeslot']}</td>
  </tr>
  <tr>
  <td>Location</td>
  <td>{$_GET['location']}</td>
  </tr>
  <tr>
  <td></td>
  <td><a class='btn btn-primary' href='process_booking.php?sid={$_GET['sid']}&name={$_GET['name']}&timeslot={$_GET['timeslot']}&location={$_GET['location']}'>Confirm</a></td>
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