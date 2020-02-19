<?php
//the subject
$sub = "Your 12subject";
//the message
$msg = "Your 123message";
//recipient email here
$rec = "bhavanirangasamy@gmail.com";
//send email
try{
	if(mail($rec,$sub,$msg))
		echo"send";
	
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>