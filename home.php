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
      <a class="nav-link" href="startpage.php">Logout</a>
    </li>
  </ul>
</nav><br>
<form action="home.php" method="POST" autocomplete="OFF">

<div class="container">
<div class="row">
  
<h1>Search My Bus</h1>

    <div class="container">
<br><br>
 <div class="form-group row">

    <label for="inputEmail3" class="col-sm-6 col-form-label" style="font: 30px Arial, sans-serif;">ENTER THE FROM PLACE</label>
          <div class="col-sm-6">
          <input type="text"  name="subj" style="font: 30px Arial, sans-serif;" required ></textarea>
    </div>
  </div><br>
 <div class="form-group row">
           <label for="inputEmail3" class="col-sm-6 col-form-label" style="font: 30px Arial, sans-serif;">ENTER TO PLACE</label>
           <div class="col-sm-6">
        <input type="text"  name="subj1" style="font: 30px Arial, sans-serif;" required></textarea>
</div>
</div><br><br>
<div class="form-group row">
         
        <input type="submit"  name="submit" sclass="form-control col-xm-2"  class="btn btn-primary"  required></textarea>
</div></div>
</div>
</div>

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