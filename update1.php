<?php
include("main.php");
session_start();
$busnumber=$_SESSION["bussn"];
$sqle="SELECT *from buses where busno='$busnumber'";
$result=$con->query($sqle);
$mess=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
  <div class="row">
    <h2>Insert</h2>
    <div class="container">
      <form action="update1.php" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Bus Number</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bn" placeholder="Bus number" value="<?php echo $mess['busno'] ?>" readonly="readonly">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">From</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="fp" value="<?php echo $mess['fromplace'] ?>" placeholder="From Place">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">To</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="tp" value="<?php echo $mess['toplace'] ?>" placeholder="To plcae">
          </div>
        </div>

<div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">From Timing</label>
          <div class="col-sm-8">
            <input type="time" class="form-control" name="ft" value="<?php echo $mess['fromtimeplace'] ?>"  placeholder="From Timing">
          </div>
        </div>

<div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">To Timing</label>
          <div class="col-sm-8">
            <input type="time" class="form-control" name="tt" value="<?php echo $mess['totimeplace'] ?>" placeholder="To Timing">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">Seat</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="ss" value="<?php echo $mess['seat'] ?>" placeholder="Number Of Seats">
          </div>
        </div>

        
        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <input type="submit" class="btn btn-primary" name="submit" value="Insert">
          </div>
        </div>
      </form>
    </div>
  </div>
<?php
if(isset($_POST["submit"])){

$fp=$_POST["fp"];
$tp=$_POST["tp"];
$ft=$_POST["ft"];
$tt=$_POST["tt"];
$ss=$_POST["ss"];
$update="UPDATE `buses` SET `fromplace`='$fp',`toplace`='$tp',`fromtimeplace`='$ft',`totimeplace`='$tt',`seat`='$ss' WHERE busno=$busnumber";
if($con->query($update)){
	header("location:adminhome.php");
}
}
?>
</body>
</html>