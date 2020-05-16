<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
   
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form action="view.php" method="POST">
<div class="container">
	<br><br>
  <h2>BUSES DATABASE</h2>          
 <br>
  <table class="table table-dark table-striped">

<?php
include("main.php");
error_reporting(~E_NOTICE);
$sq="SELECT *from buses";

	echo "<thead><tr><th>BUS NUMBER</td><td>FROM</td><td>TO</td><td>FROM TIME</td><td>TO TIME</td><td>SEAT</td><td>STATUS</td><td>DIRECTION</td></tr></thead><tbody>";
	$res=$con->query($sq);
	while($aMessages=$res->fetch_array()){
		echo '<tr><th>'.$aMessages["busno"].'</td><td>'.$aMessages["fromplace"].'</td><td>'.$aMessages["toplace"].'</td><td>'.$aMessages["fromtimeplace"].'</td><td>'.$aMessages["totimeplace"].'</td><td>'.$aMessages["seat"].'</td><td>'.$aMessages["status"].'</td><td>'.$aMessages["direction"].'</td></tr>';
	}
	echo '</tbody></table></center><a href="456.html"><button  class="btn float-left login_btn" style="size: 10%;">Direction</button></a><input type="submit" class="btn btn-primary" name="sub" value="OK">';
?>
</div>

</form> 
 <?php
if($_POST['sub'])
  header("location:adminhome.php");
?>
</body>
</html>