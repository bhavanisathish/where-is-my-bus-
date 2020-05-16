<?php
include("main.php");

error_reporting( ~E_NOTICE );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

 
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="change.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form method="POST" action="adminhome.php">
		<div class="input-group form-group ">
		<div class="form-group " style="padding-top: 5%; padding-left: 10%;">

						<input type="submit" value="INSERT" name="insert" class="btn float-right login_btn">
					</div>
					<div class="form-group" style="padding-top: 10%; padding-left: 10%;">
						<input type="submit" value="DELETE" name="delete" class="btn float-right login_btn">
					</div>
					<div class="form-group" style="padding-top: 15%; padding-left: 10%;">
						<input type="submit" value="UPDATE" name="update" class="btn float-right login_btn">
					</div>
					<div class="form-group" style="padding-top: 20%; padding-left: 10%;">
						<input type="submit" value="VIEW" name="view" class="btn float-right login_btn">
					</div>
					<div class="form-group" style="padding-top: 25%; padding-left: 10%;">
						<input type="submit" name="logout" value="LOGOUT" class="btn float-right login_btn">
					</div>
	</div>
</form>
<?php
if($_POST["insert"]){
	header("location:insert.php");
}
if($_POST["delete"]){
	header("location:delete.php");
}
if($_POST["update"]){
	header("location:update.php");
}
if($_POST["view"]){
	header("location:view.php");
}
if($_POST["logout"]){
	header("location:startpage.php");
}
?>
</body>
</html>