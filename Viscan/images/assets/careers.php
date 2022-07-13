


<?php
$statusMsg='';
if(isset($_FILES["file"]["name"])){
    $name = $_POST['name'];	
	$email = $_POST['email'];
	$phone = $_POST['phone']; 
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];	
	$pincode = $_POST['pincode'];
	$address = $_POST['address'];
	$exp = $_POST['exp'];
	$cname = $_POST['cname'];
	$position = $_POST['position'];
	$message = $_POST['message'];
$fromemail =  $email;
$subject="Application from Vi-Scan Diagnostics";
$email_message = '<h2>Application from ('.$name.')</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Contact:</b> '.$phone.'</p>
                    <p><b>City:</b> '.$city.'</p>
                    <p><b>State:</b> '.$state.'</p>
                    <p><b>Country:</b> '.$country.'</p>
                    <p><b>Pincode:</b> '.$pincode.'</p>
                    <p><b>Address:</b> '.$address.'</p>
                    <p><b>Expirience:</b> '.$exp.'</p>
                    <p><b>Company Name:</b> '.$cname.'</p>
                    <p><b>Intrested Position:</b> '.$position.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail."\r\n"."CC: dr.shilika@chesadentalcare.com,webdeveloper@chesadentalcare.com";
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

if($_FILES["file"]["name"]!= ""){  
	$strFilesName = $_FILES["file"]["name"];  
	$strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
	
	
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";


    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail="admin@viscandiagnostics.com";	

if(mail($toemail, $subject, $email_message, $headers)){
   $statusMsg= "Email send successfully with attachment";
}else{
   $statusMsg= "Not sent";
}
}
   ?>


<!DOCTYPE html>
<html lang="en">
  

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta charset="utf-8">
<meta charset="utf-8"><meta name="keywords" content="dental treatment, opg scan, cbct scan">
<meta name="description" content="Best CBCT &amp; OPG Dental Scan">
<meta name="author" content="Vi-Scan Diadgostic Center">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Centers</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link 
  href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font-awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  
    <!-- Flaticon -->
    <link href="assets/flaticon/flaticon.css" rel="stylesheet">
  
    <!-- lightcase -->
    <link href="assets/css/lightcase.css" rel="stylesheet">
  
    <!-- Swiper -->
    <link href="assets/css/swiper.min.css" rel="stylesheet">

    <!-- quick-view -->
    <link href="assets/css/quick-view.css" rel="stylesheet">

    <!-- nstSlider -->
    <link href="assets/css/jquery.nstSlider.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="assets/css/flexslider.css" rel="stylesheet">
  
    <!-- Style -->
    <link href="assets/css/rtl.css" rel="stylesheet">
    
    <!-- Style -->
    <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- Responsive -->
    <link href="assets/css/responsive.css" rel="stylesheet">
	
	
  
  
  </head>
  <body id="scroll-top">
    <!-- Preloader start here -->
    
    <!-- Preloader end here -->
<?php include('header.php');?>

	
    <!-- Page Header Start here -->
    <section class="page-header" style="background-image: url(images/background/bnr4.png);">
      <div class="overlay">
        <div class="container">
          <h3>Career</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>-</li>
            <li>Career</li>
          </ul>
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
  	<!-- Page Header End here -->
	
	<section class="testimonial" style="padding-bottom:30px;padding-top:30px">
  		<div class="container">
  			<div class="row">
	  			<div class="about-content">
					<div class="section-header bg">
						<h3 style="color: #4b0859;">Application form </h3>
						<hr/>
					</div>
	  			</div>
	  		</div>
	  		<div class="row">
	  		  <div class="col-md-2"></div>
	  		
	  		  <div class="col-md-8"  style="border: 2px solid #f86517;border-radius: 29px;padding: 25px; border-style: dashed;">
	  		        		<?php if(!empty($statusMsg)){ ?>
                                <p><?php echo $statusMsg; ?></p>
                            <?php } ?>
	  		   <form method="post" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email" autocomplete="off">
                  </div>
                </div>
              
               <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="phone" class="form-control" type="number" placeholder="Enter Phone" autocomplete="off">
                  </div>
                </div>
				
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">City</label>
                    <input id="form_city" name="city" class="form-control" type="text" placeholder="Enter City" autocomplete="off">
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">State</label>
                    <input id="form_state" name="state" class="form-control" type="text" placeholder="Enter State" autocomplete="off">
                  </div>
				  <div class="form-group">
                    <label for="form_phone">Country</label>
                    <input id="form_country" name="country" class="form-control" type="text" placeholder="Enter Country" autocomplete="off">
                  </div>
				  <div class="form-group">
                    <label for="form_phone">Pincode</label>
                    <input id="form_pincode" name="pincode" class="form-control" type="number" placeholder="Enter Pincode" autocomplete="off">
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Location / Area/ Street</label>
                    <textarea id="form_message" name="address" class="form-control required"  style="margin: 0px; width: 100%; height: 140px;" placeholder="Enter Location / Area/ Street"></textarea>
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Experience <small>*</small></label>
                    <select name="exp" class="form-control required" type="text" autocomplete="off">
						<option value="">--Select--</option>
						<option value="fresher">Fresher</option>
						<option value="0-1 Years">0-1 Years</option>
						<option value="1-2 Years">1-2 Years</option>
						<option value="2-3 Years">2-3 Years</option>
						<option value="3-4 Years">3-4 Years</option>
						<option value="4-5 Years">4-5 Years</option>
						<option value="5-6 Years">5-6 Years</option>
					</select>
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Company Name</label>
                    <input id="form_phone" name="cname" class="form-control" type="text" placeholder="Company Name" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Intrested Position</label>
                    <input id="form_phone" name="position" class="form-control" type="text" placeholder="Position" autocomplete="off">
                  </div>
                </div>
				<div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_phone">Upload Your CV</label>
                    <input type="file" name="file" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" name="submit" class="lgx-btn" data-loading-text="Please wait...">Send your message</button>
                <button type="reset"class="lgx-btn">Reset</button>
              </div>
            </form>
</div>
<div class="col-md-2"></div>
	  		</div>
	  	</div>
  	</section>
	
  	<?php include('footer.php');?>
   