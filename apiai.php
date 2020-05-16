<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
type="text/css"
/>
</head>
<style>

body { margin: 0; padding: 0; }
 
</style>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item " >
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="data.php">Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Logout</a>
    </li>
  </ul>
</nav>
<div class="container">
    <br>   <br> 
  <h2>BUSES DATABASE</h2>
  <br>     
 
  <table class="table table-dark table-striped">

<thead><tr><th>BUS NUMBER</td><td>FROM</td><td>TO</td><td>FROM TIME</td><td>TO TIME</td><td>SEAT</td><td>STATUS</td><td>DIRECTION</td></tr> </thead> <tbody>
<?php
include("main.php");

$sq="SELECT *from buses";
  $res=$con->query($sq);
  while($aMessages=$res->fetch_array()){ 

    echo '<tr><th name="funny">'.$aMessages["busno"].'</td><td name="funy">'.$aMessages["fromplace"].'</td><td>'.$aMessages["toplace"].'</td><td>'.$aMessages["fromtimeplace"].'</td><td>'.$aMessages["totimeplace"].'</td><td>'.$aMessages["seat"].$aMessages["seat"].'</td><td>'.$aMessages["status"].'</td>';
    echo "

<div id='map' style='width:30%;'></div>


<script>


  mapboxgl.accessToken = 'pk.eyJ1IjoiYmhhdmFuaXJhbmdhc2FteSIsImEiOiJjazhlbzJmaW4xNzF3M2xvMWoxOWIzeHQxIn0.0cXeNxgvkrfwTH2nza0jEg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-79.4512, 43.6568],
            zoom: 6
        });
  
        map.on('load', function() {
  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  });
  map.addControl(directions, 'top-left');
  directions.setOrigin('". $aMessages["fromplace"].",Tamil Nadu, India');

directions.setDestination('".$aMessages["toplace"].", Tamil Nadu, India'); 
  });


    </script>
    ";
  }
  ?>
  </tbody>
</table>

</body>
</html>


