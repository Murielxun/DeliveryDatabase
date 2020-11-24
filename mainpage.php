<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<div class = "restaurant">
  <head>
    <title>Main Page for Delivery Database</title>
  </head>
</div>
  <body class = "courierBody" >
  <div class = "restaurant">
      <h1>CPSC 304 Group Project - Delivery Database</h1>
      <h3>Group Members: Victor Cheng, Jennifer Chan, XinYue Wang</h3>
      <hr />
  </div>

  <div class = "restaurant">
  <p>Proceed as User:</p>
  <input name="newPage" type="button" value="Cutomer" onclick="window.open('customer.php')">
  <input name="newPage" type="button" value="Courier" onclick="window.open('courier.php')">
  <input name="newPage" type="button" value="Restaurant Staff" onclick="window.open('restaurant.php')">
  <!-- <p>Hard-coded Queries for Project:</p>
  <input name="newPage" type="button" value="Check Them Out" onclick="window.open('hardcode.php')"/> -->
  <hr>

  <p>Your current position:</p>
  <button onclick="getLocation()">GPS</button>
  <div id="mapholder"></div>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEfiGdCFozkk3ippbqmzcsrl-6tewyRM&callback=initMap"
          type="text/javascript"></script>
  </div>
  </body>
<script src = "GPS.js"></script>
</html>
