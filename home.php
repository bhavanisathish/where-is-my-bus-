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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active" >
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
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
<form action="home.php" method="POST" autocomplete="OFF">

<div class="container">

<h3><center>Search My Bus</center></h3>
	 <div class="form-group">
          <label>ENTER THE FROM PLACE </label>
        <input type="text"  name="subj" sclass="form-control col-xm-2"  required></textarea>
    </div>
 <div class="form-group">
          <label>ENTER THE TO PLACE </label>
        <input type="text"  name="subj1" sclass="form-control col-xm-2"  required></textarea>
</div>
<div class="form-group">
         
        <input type="submit"  name="submit" sclass="form-control col-xm-2"  required></textarea>
</div></div>
</form>

<?php
if(isset($_POST["submit"]))
{
	$from=$_POST["subj"];
	$to=$_POST["subj1"];
	$_SESSION["fromm"]=$from;
	$_SESSION["too"]=$to;
	header("location:result.php");
}
?>
</body>
</html>