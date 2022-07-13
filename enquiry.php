<?php
	
	$name = $_REQUEST['name']; 
	$email = $_REQUEST['email']; 
	$phone = $_REQUEST['phone']; 

	
	$message = $_REQUEST['message'];
	$nl = "
	";
	
	$message = "Name: ".$name.$nl.$nl;
	$message .= "Email: ".$email.$nl.$nl;
	$message .="Phone:".$phone.$nl.$nl;
	$message .="Message:".$message.$nl.$nl;
	
	$subject = "Enquiry mail from Chesa Dental Care";
		
	
		$to = "admin@viscandiagnostics.com";
	 
	$headers = "From:".$email."\r\n"."CC: dr.shilika@chesadentalcare.com,support@viscandiagnostics.com";

	$suc  = mail($to,$subject,$message,$headers);
	
	
	if($suc)
	{
		$message = "Mail Sent Successfully ..!";
	 	echo "<script>window.location='contact.php?msg=".$message."';</script>";
		//header('location:contact.php?val=1');
		//exit();
	}	 	
 	else
	{
		$message = "Mail Not Sent ..!";
		echo "<script>window.location='contact.php?msg=".$message."';</script>";
		exit();
	}
?>