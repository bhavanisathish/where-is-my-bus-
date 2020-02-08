<?php
include("main.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
   
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form method="POST" action="adminhome.php">
	<input type="submit" value="INSERT" name="insert">
	<input type="submit" value="DELETE" name="delete">
	<input type="submit"  value="UPDATE" name="update">
	<input type="submit" value="VIEW" name="view">
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
?>
</body>
</html>