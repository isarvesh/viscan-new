<?php
  
	$connection =mysqli_connect('localhost', 'viscan_centre', 'Chesa@123', 'viscan_centre');
	
		if(!$connection) 
	{
	    die("Unable to connect to the database".mysqli_error($connection));
	}
					 
?>


<?php
	
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];	
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$center = $_REQUEST['center'];
	$refer = $_REQUEST['refer'];
	$purpose = $_REQUEST['purpose'];
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$scan_type = $_REQUEST['scan_type'];
	$message1 = $_REQUEST['message'];
	$nl = "
	";
	
	$message .= "Name:".$fname.$nl.$nl;
	$message .= "Email:".$email.$nl.$nl;
	$message .= "Phone:".$phone.$nl.$nl;
	$message .= "City:".$city.$nl.$nl;
	$message .= "Center:".$center.$nl.$nl;
	$message .= "Referred By:".$refer.$nl.$nl;
	$message .= "Purpose of Scan:".$purpose.$nl.$nl;
	$message .= "Date:".$date.$nl.$nl;
	$message .= "Time:".$time.$nl.$nl;
	$message .= "Scan Type:".$scan_type.$nl.$nl;
	$message .="Message:".$message1.$nl.$nl;
	
	$subject = "Appointment Request From ($center | $date | $time ) Viscan Diagnostic Centre";
	
	
	
	$query = "SELECT * FROM centre where centre='$center'";
	$result = mysqli_query($connection,$query) or die(mysqli_error());
	$count1 = mysqli_num_rows($result);
	 while ($row = mysqli_fetch_array($result))
     {
        $id = $row['id'];
        $center = $row['centre'];
        $emails = $row['email'];
     }		
	
		$to = "$emails";
	 
	$headers = "From:".$email."\r\n"."CC: webdeveloper@chesadentalcare.com";

	$suc  = mail($to,$subject,$message,$headers);
	
	
	if($suc)
	{
		//$msg = "Mail Sent Successfully ..!";
	  echo '<script>alert("Thank you for getting in touch with us! You will receive a confirmation call from us shortly."); window.location="index.php";</script>';
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