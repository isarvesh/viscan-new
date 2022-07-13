
	<header>
  		<div class="header-top">
  			<div class="container">
  				<ul class="left">
	  				<li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Helpline Number : +91 96069 80274</li>
					<li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> connect@viscandiagnostics.com </li>
	  				
	  			</ul>
	  			<ul class="right">
	  				<li><a href="https://www.facebook.com/ViScanDiagnostics" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			  				<li><a href="https://in.linkedin.com/company/vi-scan-diagnostics" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/invites/contact/?i=390cqylqiv7n&utm_content=cq5zr7x/" target="_blank" class="google"><i class="fa fa-instagram"></i></a> </li>
							<li><a href="https://www.youtube.com/channel/UCwchI5vi9HbZDKP2UIt3mMQ" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a> </li>
	  				
	  			</ul>
  			</div><!-- container -->
  		</div><!-- header top -->
  		<div class="main-menu">
  			<nav class="navbar ">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header" style="width:28%;margin-left: 0px;">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="images/logos.svg" alt="logo" class="img-responsive"></a>
					
			    </div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-right: -25px;">
				   
					<ul class="nav navbar-nav" id="main-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li class="dropdown">
							<a href="our_services.php">Services <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li ><a href="cbct.php">CBCT</a></li>
								<li ><a href="opg.php">OPG</a></li>
							</ul>
						</li>
						<li><a href="center.php">Centres</a></li>
						<!--<li><a href="our_team.php">Our Team</a></li>--->
						<!--<li><a href="career.php">Careers</a></li>-->
						<li><a href="contact.php">Contact Us</a></li>
						<li><a data-toggle="modal" data-target="#myModal" style="    border-top: 1px solid #4b0859;
    border-right: 1px solid #4b0859;
    border-bottom: 1px solid #4b0859;
    border-left: 1px solid #4b0859;
    margin-left: 5px;
    margin-right: 8px;
    border-radius: 7px;
    background: #4b0859;
    color: #fff;
    padding: 6px;
    margin-top: 34px;
    margin-bottom: 8px;">Book An Appointment</a></li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li ><a href="cources.html">Academics and curriculum</a></li>
								<li ><a href="cbse.html">CBSE</a></li>
								<li ><a href="cbse-results.html">CBSE Results</a></li>
							</ul>
						</li>--->
						
					</ul>
						
				</div><!-- /.navbar-collapse -->
			
			  </div><!-- /.container -->
			</nav>
  		</div><!-- main menu -->
  	</header>  	<!-- header End here -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="title" style="text-align:center;color:#92278f;">Book An Appointment</h3>
        </div>
        <div class="modal-body">
           <form name="contactForm" onsubmit="return validateForm()"  action="sms.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">First Name <small>*</small></label>
                    <input id="form_name" name="fname" class="form-control" type="text" required placeholder="Enter First Name" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Last Name <small>*</small></label>
                    <input id="form_name" name="lname" class="form-control" type="text" required placeholder="Enter Last Name" autocomplete="off">
                  </div>
                </div>
                
              </div>
              <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" required type="email" placeholder="Enter Email" autocomplete="off">
                  </div>
                </div>
               <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone <small>*</small></label>
                    <input id="form_phone" name="phone" class="form-control" type="number" required  placeholder="Enter Phone" autocomplete="off">
                  </div>
                </div>
				
              </div>
              <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">City <small>*</small></label>
                    <input id="form_subject" name="city" class="form-control" type="text" required placeholder="Enter ciy" autocomplete="off">
                  </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Centre</label>
                  <select  id="form_phone" class="form-control" name="center" required>
				  <option>Select</option>
				  <option value="Vi-Scan Diagnostics-Malviyanagar">Vi-Scan Diagnostics-Malviyanagar</option>
				  <option value="Vi-Scan Diagnostics-Noida">Vi-Scan Diagnostics-Noida</option>
				  <option value="Vi-Scan Diagnostics-Rohini">Vi-Scan Diagnostics-Rohini</option>
				  <option value="Vi-Scan Diagnostics-Dwarka">Vi-Scan Diagnostics-Dwarka</option>
				  <option value="Vi-Scan Diagnostics-Pune">Vi-Scan Diagnostics-Pune</option>
				  <option value="Vi-Scan Diagnostics-Nashik">Vi-Scan Diagnostics-Nashik</option>
				  <option value="Vi-Scan Diagnostics-Kalyan">Vi-Scan Diagnostics-Kalyan</option>
				  <option value="Vi-Scan Diagnostics-Andheri West">Vi-Scan Diagnostics-Andheri West</option>
				  <option value="Vi-Scan Diagnostics-Porur">Vi-Scan Diagnostics-Porur</option>
				  <option value="Vi-Scan Diagnostics-Annanagar">Vi-Scan Diagnostics-Annanagar</option>
				  <option value="Vi-Scan Diagnostics-T-Nagar">Vi-Scan Diagnostics-T-Nagar</option>
				  <option value="Vi-Scan Diagnostics-Camp Road">Vi-Scan Diagnostics-Camp Road</option>
				  <option value="Vi-Scan Diagnostics-Adyar">Vi-Scan Diagnostics-Adyar</option>
				  <option value="Vi-Scan Diagnostics-Madurai">Vi-Scan Diagnostics-Madurai</option>
				  <option value="Vi-Scan Diagnostics-Hassan">Vi-Scan Diagnostics-Hassan</option>
				  <option value="Vi-Scan Diagnostics-Shivamogga">Vi-Scan Diagnostics-Shivamogga</option>
				  <option value="Vi-Scan Diagnostics-Bangalore">Vi-Scan Diagnostics-Bangalore</option>
				  </select>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Referred By </label>
                    <input id="form_subject" name="refer" class="form-control" type="text"  placeholder="Enter Referred By" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Purpose of Scan</label>
                    <input id="form_subject" name="purpose" class="form-control" type="text"  placeholder="Enter Purpose of Scan" autocomplete="off">
                  </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Date <small>*</small></label>
                    <input id="form_subject" name="date" class="form-control" type="date" required placeholder="Enter Date" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Time <small>*</small></label>
                    <input id="form_subject" name="time" class="form-control" type="time" required placeholder="Enter time" autocomplete="off">
                  </div>
                </div>
            </div>
            <div class="row">
                
              <div class="col-md-12">
                <div class="form-group">
                  <label>Scan Type</label>
                  <select  id="form_phone" class="form-control" name="scan_type"  data-error="Scan Type is required.">
				  <option>Select</option>
				  <option value="OPG">OPG</option>
				  <option value="CBCT">CBCT</option>
				  </select>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="message" class="form-control" required rows="5" placeholder="Enter Message" autocomplete="off"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control"  type="hidden" value="" />
                <button type="submit" class="lgx-btn" data-loading-text="Please wait...">Send your message</button>
                <button type="reset"class="lgx-btn">Reset</button>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="lgx-btn" data-dismiss="modal">Close</button>
        </div>
      </div>
      	<script>
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var fname = document.contactForm.fname.value;
    var lname = document.contactForm.lname.value;
    var email = document.contactForm.email.value;
    var city = document.contactForm.city.value;
    var purpose = document.contactForm.purpose .value;
    var refer = document.contactForm.refer.value;
    var phone = document.contactForm.phone.value;
     var message = document.contactForm.message.value;
  
    
	// Defining error variables with a default value
    var fnameErr = lnameErr = emailErr = cityErr = referErr = purposeErr = mobileErr = messageErr =  true;
    
    // Validate name
    if(fname == "") {
        printError("fnameErr", "Please enter your First name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fnameErr", "Please enter a valid First name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }
    
    if(lname == "") {
        printError("lnameErr", "Please enter your Last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname) === false) {
            printError("lnameErr", "Please enter a valid Last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate city
   if(city == "") {
        printError("cityErr", "Please enter your City name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(city) === false) {
            printError("cityErr", "Please enter a valid City name");
        } else {
            printError("cityErr", "");
            cityErr = false;
        }
    }
    
    if(refer == "") {
        printError("referErr", "Please enter your Refered By");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(refer) === false) {
            printError("referErr", "Please enter a valid name");
        } else {
            printError("referErr", "");
            referErr = false;
        }
    }
    
    if(purpose == "") {
        printError("purposeErr", "Please enter your Refered By");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(purpose) === false) {
            printError("purposeErr", "Please enter a valid name");
        } else {
            printError("purposeErr", "");
            purposeErr = false;
        }
    }
    
 
    
    // Validate mobile number
    if(phone == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phone) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    if(message == "") {
        printError("messageErr", "Please select your Message");
    } else {
        printError("messageErr", "");
        messageErr = false;
    }
    
    
    
    
    
    // Prevent the form from being submitted if there are any errors
    if((fnameErr || fnameErr || emailErr || cityErr || stateErr || countryErr || mobileErr || messageErr  ) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "First Name: " + fname + "\n" +
                          "Last Name: " + lname + "\n" +
                          "Email Address: " + email + "\n" +
                          "City: " + city + "\n" +
                          "state: " + state + "\n" +
                          "Country: " + country + "\n" +
                          "Mobile Number: " + mobile + "\n"
                          "message: " + message + "\n";
      
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>
    </div>
  </div>
  