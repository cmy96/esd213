<?php

require_once "include/common.php";

include "include/services/docker_links.php";
include 'header.php';

$salons = new SalonDAO($salon);
$results = $salons->retrieveAll()["Search"];

?>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Salons</h1>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" style="height: 350px">
            <div class="carousel-item active">  
              <img class="d-block img-fluid" src="./images/salon1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/salon2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item" >
              <img class="d-block img-fluid" src="./images/salon3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          <?php
          foreach($results as $result){
            $date = new DateTime($result['Timeslot']);
            if ($result['Availability']>0){
              $google_maps = "https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=900x350&maptype=roadmap
              &key={$api_key}&markers={$result['Description']}";
              echo "
              <div class='col-lg-4 col-md-6 mb-4'>
              <div class='card h-100'>
              ";
              echo "
                <a href='#'><img class='card-img-top' src='{$google_maps}' alt=''></a>
              ";
              echo "
               <div class='card-body'>
                  <h4 class='card-title'>
                    {$result['name']}
                  </h4>
                  <h5>{$result['Description']}</h5>
                  <p class='card-text'>{$date->format('Y-m-d h:m:s')} : <br/>{$result['Availability']} slots</p>
                </div>
                <div class='card-footer'>
                  <a class='btn btn-outline-secondary' href ='make_booking.php?bid={$result['bid']}&name={$result['name']}&timeslot={$result['Timeslot']}&location={$result['locationID']}&sessionID={$result['sessionID']}&description={$result['Description']}'>
                  Make Booking
                  </a>
                </div>
              </div>
            </div>
              ";
            }


          }

          ?>
          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  

</body>


<?php 
include "footer.php";
?>




</html>