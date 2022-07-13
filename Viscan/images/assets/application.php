<?php
	
	$name = $_REQUEST['name'];	
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone']; 
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$country = $_REQUEST['country'];	
	$pincode = $_REQUEST['pincode'];
	$address = $_REQUEST['address'];
	$exp = $_REQUEST['exp'];
	$position = $_REQUEST['position'];
	$cname = $_REQUEST['cname'];
	$cv = $_REQUEST['cv'];
	$message1 = $_REQUEST['message'];
	$nl = "
	";
	
	$message = "Name: ".$name.$nl.$nl;
	$message .= "Email: ".$email.$nl.$nl;
	$message .="Phone:".$phone.$nl.$nl;
	$message .= "City: ".$city.$nl.$nl;
	$message .= "State: ".$state.$nl.$nl;
	$message .= "Country: ".$country.$nl.$nl;
	$message .="Pincode:".$pincode.$nl.$nl;
	$message .="Address:".$address.$nl.$nl;
	$message .="Expirience:".$exp.$nl.$nl;
	$message .="Intrested Position:".$position.$nl.$nl;
	$message .="Company:".$cname.$nl.$nl;
	$message .="Resume:".$cv.$nl.$nl;
	$message .="Message:".$message1.$nl.$nl;
	

	
	$subject = "Application from Chesa Dental Care";
		
	
		$to = "admin@viscandiagnostics.com";
	 
	$headers = "From:".$email."\r\n"."CC: dr.shilika@chesadentalcare.com";

	$suc  = mail($to,$subject,$message,$headers);
	
	
	if($suc)
	{
		//$message = "Mail Sent Successfully ..!";
	 	echo '<script>alert("Mail Sent Successfully ..!, Our Team Will Contact You");window.location="careers.php";</script>';
		//header('location:contact.php?val=1');
		//exit();
	}	 	
 	else
	{
	//	$message = "Mail Not Sent ..!";
		echo '<script>alert("Mail Not Sent ..!");window.location="careers.php";</script>';
		exit();
	}
?>