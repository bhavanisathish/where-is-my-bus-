<?php
$con=new mysqli("localhost","root","","bus");
if($con->connect_error)
{
	echo $con->connect_error;
}
?>