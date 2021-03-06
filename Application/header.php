<!DOCTYPE html>
<html lang="en">
<?php 
require_once "include/common.php";
include 'credentials.php';
require_once "include/services/docker_links.php";
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>A Cut Above</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/shop-homepage.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="list-salons.php">A Cut Above</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="list-salons.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hairstyles.php">Hairstyles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.php">My Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">My Bookings</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
