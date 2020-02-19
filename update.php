<?php
include("main.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
</title>
<link rel="stylesheet" type="text/css" href="login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container" style="align-items: center;align-content: center;">
  <div class="row">
    <h2>Update the bus</h2>
    <div class="container">
      <form action="update.php" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Enter The Bus Number</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bn" placeholder="Bus number">
          </div>
        </div>
        
        
        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <input type="submit" class="btn btn-primary" name="submit" value="Delete">
          </div>
        </div>
      </form>
    </div>
  </div>
<?php
if(isset($_POST["submit"])){
$_SESSION["bussn"]=$_POST["bn"];

header("location:update1.php");

}
?>
</body>
</html>