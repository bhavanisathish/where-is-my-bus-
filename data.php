<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
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

<?php
include("main.php");

$sq="SELECT *from buses";
	echo "<center><h2>RESULT</h2></center>";
	echo "<center><table>";
	echo "<tr><th>BUS NUMBER</td><td>FROM</td><td>TO</td><td>FROM TIME</td><td>TO TIME</td><td>SEAT</td></tr>";
	$res=$con->query($sq);
	while($aMessages=$res->fetch_array()){
		echo '<tr><th>'.$aMessages["busno"].'</td><td>'.$aMessages["fromplace"].'</td><td>'.$aMessages["toplace"].'</td><td>'.$aMessages["fromtimeplace"].'</td><td>'.$aMessages["totimeplace"].'</td><td>'.$aMessages["seat"].'</td><td><tr>';
	}
	echo "</table></center>";
?>
</body>
</html>