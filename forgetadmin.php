<?php
include("main.php")
?>
<!DOCTYPE html>
<html>
<head>	<title>Admin Login Page</title>
   
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card1">
			<div class="card-header">
				<h3><center>Forget Password</center></h3>
				
			</div>
			<div class="card-body">
				<form action="forgetadmin.php" method="POST" autocomplete="OFF">
					<div class="input-group form-group">					
						<input type="text" class="form-control" name ="usname" placeholder="USERNAME">						
					</div> <br>
					<div class="input-group form-group">						
						<input type="text" class="form-control" name="email" placeholder="EMAIL ID">
					</div> <br>
					
													
					<div class="input-group form-group">						
						<input type="password" class="form-control" name="pas" placeholder="PASSWORD">
					</div> <br>
					
					<div class="input-group form-group">						
						<input type="password" class="form-control" name="cpassword" placeholder=" CONFIRM PASSWORD">
					</div> <br>
					
					<div class="form-group">
						<input type="submit" value="SAVE" name="submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
			</div>
		</div>
	</div>
</div>
<?php
if(isset($_POST["submit"])){
$un=$_POST["usname"];
$emailid=$_POST["email"];

$cpassword=$_POST["cpassword"];

$upas=$_POST["pas"];
if($un!="" && $emailid!=""  && $upas!=""){
	if($cpassword==$upas){
		$ser="SELECT * from admin where username='$un' and emailid='$emailid'";
		$res=$con->query($ser);
if($res->num_rows>0){
	$update="UPDATE admin set password='$cpassword' where username='$un' and emailid='$emailid'";
	$con->query($update);
	echo "inserted";
	header("location:adminlogin.php");
}
}else{echo "<p class='error'>Password must be same";}
}
}
?>
</body>
</html>