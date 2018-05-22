<?php


	$name= $_POST['name'];
	$email= $_POST['email'];
	$message= $_POST['message'];
	$to= "contact@themebucks.net";
	$subject= "New Message";
	$headers = "From: " . $email;

	if($name!='' && $email!='' && $message!=''){
		mail($to, $subject, $message, $headers);
		header("Location:index.php");
	}
	else {
		header("Location:index.php");
	}
	
	







?>