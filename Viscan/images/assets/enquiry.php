<?php
	
	$name = $_REQUEST['name']; 
	$email = $_REQUEST['email']; 
	$phone = $_REQUEST['phone']; 
	$subject = $_REQUEST['subject']; 
	
	$messages = $_REQUEST['message'];
	$nl = "
	";
	
	$message .="Name:".$name.$nl.$nl;
	$message .="Email: ".$email.$nl.$nl;
	$message .="Phone:".$phone.$nl.$nl;
	$message .="Subject:".$subject.$nl.$nl;
	$message .="Message:".$messages.$nl.$nl;
	
	$subject = "Enquiry mail from Chesa Dental Care";
		
	
		$to = "admin@viscandiagnostics.com";
	 
	$headers = "From:".$email."\r\n"."CC:dr.shilika@chesadentalcare.com";

	$suc  = mail($to,$subject,$message,$headers);
	
	
	if($suc)
	{
		//$message = "Mail Sent Successfully ..!";
	 	echo '<script>alert("Mail Sent Successfully ..!, Our Team Will Contact You");window.location="contact.php";</script>';
		//header('location:contact.php?val=1');
		//exit();
	}	 	
 	else
	{
		//$message = "Mail Not Sent ..!";
	echo '<script>alert("Mail Not Sent ..!");window.location="contact.php";</script>';
		exit();
	}
?>