<?php

require_once "include/common.php";


include 'header.php';

$location = $_GET["location"];
?>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4"><?=$_GET['name']?></h1>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?markers=<?=$location?>&zoom=13&size=900x350&maptype=roadmap
&key=AIzaSyBwZldeN3pqjFs7YCGTamUWXIf28h-oX_Y" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?markers=<?=$location?>&zoom=13&size=900x350&maptype=hybrid
&key=AIzaSyBwZldeN3pqjFs7YCGTamUWXIf28h-oX_Y" alt="Second slide">
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
          salon is good
          

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