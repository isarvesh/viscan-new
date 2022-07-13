<?php
	
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];	
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$pincode = $_REQUEST['pincode'];
	$message1 = $_REQUEST['message'];
	$nl = "
	";
	
	$message = "Name: ".$fname.$nl.$nl;
	$message .= "Email: ".$email.$nl.$nl;
	$message .="Phone:".$phone.$nl.$nl;
	$message .= "Requested City: ".$city.$nl.$nl;
	$message .= "Requested Pincode: ".$pincode.$nl.$nl;
	$message .="Message:".$message1.$nl.$nl;
	
	$subject = "New Centre Request From Viscan Diagnostic Center";
		
	
	$to = "admin@viscandiagnostics.com";
	 
	$headers = "From:".$email."\r\n"."CC: dr.shilika@chesadentalcare.com";

	$suc  = mail($to,$subject,$message,$headers);
	
	
	if($suc)
	{
		//$msg = "Mail Sent Successfully ..!";
	  echo '<script>alert("Mail Sent Successfully ..!, Our Team Will Contact You"); window.location="index.php";</script>';
		//header('location:contact.php?val=1');
		//exit();
	}	 	
 	else
	{
		$msg = "Mail Not Sent ..!";
		 echo '<script>alert("Mail Not Sent ..!");window.location="index.php";</script>';
		exit();
	}
?>