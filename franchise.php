<?php
	
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];	
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$address = $_REQUEST['address'];
	$pincode = $_REQUEST['pincode'];
	$pancard = $_REQUEST['pancard'];
	$interests = $_REQUEST['interests'];
	$message1 = $_REQUEST['message'];
	$nl = "
	";
	
	$message .= "Name: ".$fname.$nl.$nl;
	$message .= "Email: ".$email.$nl.$nl;
	$message .="Phone:".$phone.$nl.$nl;
	$message .= "Interested  City: ".$city.$nl.$nl;
	$message .= "State: ".$state.$nl.$nl;
	$message .= "Address: ".$address.$nl.$nl;
	$message .= "Interested Pincode: ".$pincode.$nl.$nl;
	$message .= "PanCard: ".$pancard.$nl.$nl;
	$message .= "Interested Projects: ".$interests.$nl.$nl;
	$message .="Message:".$message1.$nl.$nl;
	
	$subject = "Franchise Enquiry From Viscan Diagnostic Center";
		
	
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
