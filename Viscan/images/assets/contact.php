<!DOCTYPE html>
<html lang="en">
  

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link 
  href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body id="scroll-top">
    <!-- Preloader start here -->
    
    <!-- Preloader end here -->
  	<?php include('header.php');?>

	
    <!-- Page Header Start here -->
    <section class="page-header" style="background-image: url(images/background/bnr4.png);">
      <div class="overlay">
        <div class="container">
          <h3>Contact Us</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>-</li>
            <li>Contact Us</li>
          </ul>
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
  	<!-- Page Header End here -->
	
    <!-- Features Start here -->
    <section class="contact contact-page">
      <div class="contact-details padding-120">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul>
                <li class="contact-item">
                  <span class="icon flaticon-signs"></span>
                  <div class="content">
                    <h4>Our Location</h4>
                    <p>7, 51,52,E.P.I.P. Zone, Whitefield Rd, opp. Genysis, Bangalore, KIADB Export Promotion Industrial Area, Bengaluru, Karnataka 560066</p>
                  </div>
                </li>
                <li class="contact-item">
                  <span class="icon flaticon-smartphone"></span>
                  <div class="content">
                    <h4>Phone Number</h4>
                    <p>+91 96069 80274</p>
                  </div>
                </li>
                <li class="contact-item">
                  <span class="icon flaticon-message"></span>
                  <div class="content">
                    <h4>Email Address</h4>
                    <p>connect@viscandiagnostics.com</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
			<div style="color:#ffb606;font-weight:bold; " > </div>
			<script>  
                function validateform(){  
                var name=document.myform.name.value;
                var email=document.myform.email.value;
                var phone=document.myform.phone.value;
                var subject=document.myform.subject.value;
                var message=document.myform.message.value;
                  
                if (name==null || name==""){  
                  alert("Name can't be blank");  
                  return false;  
                  
                }
                
                 else if (email==null || email==""){  
                  alert("Email can't be blank");  
                  return false;  
                }
                
                else if(phone.length<10){  
                  alert("Phone number must be at least 10 characters long.");  
                  return false;  
                  }
                  
                  else if (subject==null || subject==""){  
                  alert("subject can't be blank");  
                  return false;  
                }
                
                else if (message==null || message==""){  
                  alert("message can't be blank");  
                  return false;  
                }
                }  
            </script> 
              <form id="contact_form" name="myform" class="form-transparent" action="enquiry.php" onsubmit="return validateform()" method="post" autocomplete="off">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name"  autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control  email"  type="email" placeholder="Enter Email" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone <small>*</small></label>
                    <input id="form_phone" name="phone" class="form-control" type="number"   placeholder="Enter Phone" autocomplete="off">
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="subject" class="form-control" type="text" placeholder="Enter Subject" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message <small>*</small></label>
                <textarea id="form_message" name="message" class="form-control" rows="5" placeholder="Enter Message" autocomplete="off"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="lgx-btn" data-loading-text="Please wait...">Send your message</button>
                <button type="reset"class="lgx-btn">Reset</button>
              </div>
            </form>
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- contact-details -->
	  <div>
	      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11011670.555344757!2d79.65692295989646!3d20.732102103848554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1616830251366!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	      --->
	      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.872159445487!2d77.72146921413524!3d12.98002751820691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11f14f0344e5%3A0x1ef585ed5a40cae9!2sChesa%20Dental%20Care%20Service%20Limited!5e0!3m2!1sen!2sin!4v1641560671395!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	      </div>
    </section>

  	<!-- Footer Start here -->
  <?php include('footer.php');?>
    <!-- jquery -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
  
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
  
    <!-- Isotope -->
    <script src="assets/js/isotope.min.js"></script>
  
    <!-- lightcase -->
    <script src="assets/js/lightcase.js"></script>
  
    <!-- counterup -->
  
    <script src="assets/js/jquery.counterup.min.js"></script>
  
    <!-- Swiper -->
    <script src="assets/js/swiper.jquery.min.js"></script>

    <!--progress-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!--velocity-->
    <script src="assets/js/velocity.min.js"></script>

    <!--quick-view-->
    <script src="assets/js/quick-view.js"></script>

    <!--nstSlider-->
    <script src="assets/js/jquery.nstSlider.js"></script>

    <!--flexslider-->
    <script src="assets/js/flexslider-min.js"></script>

    <!--easing-->
    <script src="assets/js/jquery.easing.min.js"></script>
  
    <!-- custom -->
    <script src="assets/js/custom.js"></script>
  
  
  </body>


</html>