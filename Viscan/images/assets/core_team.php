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
    <title>Core Team</title>
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
    
    <style>
        .teams {
  display:flex;
  gap:20px;
  flex-wrap:wrap;
  align-items:center;
  justify-content:center;
}
.card{
  background:#fff;
  padding:2rem;
  display:flex;
  flex-direction:column;
 justify-content:space-between;
  width:250px;
  height:350px;
  box-shadow:2px 4px 8px rgba(0,0,0,.2);
  border-radius:5px;
  animation:animate 4s linear infinite forwards;
}
.card:hover{
  box-shadow:2px 2px 12px 2px rgba(74, 189, 154,.3),2px 2px 12px 2px rgba(71, 131, 204,.3);

}
.card-top{
  display:flex;
  flex-direction:column;
  align-items:center;
}

.card-top img{
  width:180px;
  box-shadow:1px 1px 4px 2px rgba(255,255,255,.2);
  border-radius:50%;
}
.card-top .name{
  margin-top:10px;
  color:#2a1542;
  text-transform:capitalize;
  font-weight: 600;
  
}
.card-top .link {
  color: #000;
  text-align: center;
}

.card-top .link:hover{
  color:fff;
}
.btn{
  border:2px solid #1D0E2E;
  padding:.6rem;
  border-radius:30px;
  color:#fff;
  background:transparent;
  cursor:pointer;
  text-transform:capitalize;
  transition:.2s easy-in-out;
}
.btn:hover{
  background:#1D0E2E;
  box-shadow:2px 4px 3px #1D0E2E;
}

@keyframes animate{
  0%{
    border:2px solid red;
  }
  20%{
    border:2px solid #4783cc;
  } 
  40%{
    border:2px solid #ccaf47;
  }
  60%{
    border:2px solid #ca47cc;
  }
  80%{
    border:2px solid #d4555d;
  } 
  100%{
    border:2px solid #b5a951;
  }
}

li {
  list-style: none;
}


/* style member component */
.list-members {
  background: #ffe501;
  width: 80%;
  margin: 4% auto;
  display: flex;
  flex-wrap: wrap;
}

.member {
  flex-basis: 50%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.member-image {
  width: 50%;
  height: 100%;
  cursor: pointer;
  overflow: hidden;
  position: relative;
}

.member-image img {
  width: 100%;
  height: 100%;
  transition: 1s;
}

.member-image:hover img {
  transform: scale(1.1);
}

.member-info {
  width: 50%;
  text-align: center;
}

.member-info p {
  margin: 20px 0;
}


/* style social link */
.social-link .fab {
  width: 35px;
  height: 35px;
  line-height: 35px;
  border: 1px solid #000;
  margin: 0 7px;
  cursor: pointer;
  transition: transform .5s;
}

.social-link .fab:hover {
  background: #000;
  color: #ffe501;
  transform: translateY(-7px);
}

/* Membuat segitiga */
.member-image::after {
  content: '';
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-right: 15px solid #ffe501;
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
}


/* Merubah posisi member-image dengan member-info */
@media screen and (min-width: 771px) {
  .member:nth-child(4n+3) .member-info,
  .member:nth-child(4n+4) .member-info {
    order: 1;
  }
  .member:nth-child(4n+3) .member-image,
  .member:nth-child(4n+4) .member-image {
    order: 2;
  }

  /* Merubah posisi sigitiga pada baris genap */
  .member:nth-child(4n+3) .member-image::after,
  .member:nth-child(4n+4) .member-image::after {
    left: 0;
    right: auto;
    transform: translateY(-50%) rotateZ(180deg);
  }
}


/* Mobile Styles */
@media screen and (max-width: 770px) {
  .list-members {
    width: 95%;
  }
  .member {
    flex-basis: 100%;
    font-size: 14px;
  }
  .social-link .fab {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .member:nth-child(even) .member-info {
    order: 1;
  }
  .member:nth-child(even) .member-image {
    order: 2;
  }
  
  /* Merubah posisi sigitiga elemen genap */
  .member:nth-child(even) .member-image::after {
    left: 0;
    right: auto;
    transform: translateY(-50%) rotateZ(180deg);
  }
}

.our-team-section {
    position: relative;
    padding-top: 40px;
    padding-bottom: 40px;
}
.our-team-section:before {
    position: absolute;
    top: -0;
    left: 0;
    content: " ";
    background: url(img/service-section-bottom.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
}
.our-team {
    padding: 30px 0 40px;
    background: #f76618;
    text-align: center;
    overflow: hidden;
    position: relative;
    border-bottom: 5px solid #4b0859;
}
.our-team:hover{
    border-bottom: 5px solid #2f2f2f;
}

.our-team .pic{
    display: inline-block;
    width: 100%;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
}
.our-team .pic:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #4b0859;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 1;
    transform: scale(3);
    transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before{
 height: 100%;
    background: #2f2f2f; 
 }
.our-team .pic:after {
    content: "";
    width: 87%;
    height: 95%;
    border-radius: 50%;
    background: #ffffff00;
    position: absolute;
    top: 0;
    left: 18px;
    z-index: 1;
    transition: all 0.3s linear 0s;
    margin-top: -13px;
}
.our-team:hover .pic:after{
    border: 5px dashed #fff;
}
.our-team .pic img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
    position: relative;
    z-index: 2;
    margin-top:-40px;
}
.our-team:hover .pic img{
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
}
.our-team .team-content{ margin-bottom: 30px; }
.our-team .title{
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 14px;
    color: #fff;
    text-transform:capitalize;
}
.our-team .social{
    width: 100%;
    padding: 0;
    margin: 0;
    background: #2f2f2f;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;
}
.our-team:hover .social{ bottom: 0; }
.our-team .social li{ display: inline-block; }
.our-team .social li a{
    display: block;
    padding: 10px;
    font-size: 17px;
    color: #fff;
    transition: all 0.3s ease 0s;
}
.our-team .social li a:hover{
    color: #2f2f2f;
    background: #f7f5ec;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
    </style>
  
  </head>
  <body id="scroll-top">
    <!-- Preloader start here -->
    
    <!-- Preloader end here -->
<?php include('header.php');?>

	
    <!-- Page Header Start here -->
    <section class="page-header" style="background-image: url(images/background/bnr4.png);">
      <div class="overlay">
        <div class="container">
          <h3>Core Team</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>-</li>
            <li>Core Team</li>
          </ul>
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
  	<!-- Page Header End here -->
	<section class="testimonial" style="padding-top:50px; padding-bottom:30px">
  		<div class="container">
  		    <div class="row">
  		        <div class="teams">
  <div class="card">
  <div class="card-top">
    <img src="images/team/Dr Vijay Lilaramani.png" alt="">
    <span class="name">Dr Vijay Lilaramani</span>
    <p class="link">CEO</p>
  </div>
</div>
  <div class="card">
  <div class="card-top">
    <img src="images/team/Dr Anju mam.png" alt="">
    <span class="name">Dr Anju Lilaramani</span>
    <p class="link">COO</p>
  </div>
</div>
  <div class="card">
  <div class="card-top">
    <img src="images/team/Dr.Shilika.png" alt="">
    <span class="name">Dr Shilika Lilaramani</span>
    <p class="link">MD - Strategy, Innovation and Marketing</p>
  </div>
</div>
<div class="card">
  <div class="card-top">
    <img src="images/team/Asheesh.png" alt="">
    <span class="name">Mr. Adheesh Lilaramani</span>
    <p class="link">Data - Driven Process Improvement</p>
  </div>
</div>
</div>

  		    </div>
  		</div>
  	</section>
  	<section class="testimonial" style="padding-bottom:30px;background: linear-gradient(#cddc39, #009688);">
  		<div class="container">
  		    <div class="row">
  		        <ul class="list-members">
  <li class="member">
    <div class="member-image">
       <img src="images/team/Dr Vijay Lilaramani.png" alt="">
    </div>
    <div class="member-info">
      <h3 style="font-size: 22px;color: #4b0859;">Dr Vijay Lilaramani</h3>
      <p>CEO</p>
    </div>
  </li>
  <li class="member">
    <div class="member-image">
     <img src="images/team/Dr Anju mam.png" alt="">
    </div>
    <div class="member-info">
      <h3 style="font-size: 22px;color: #4b0859;">Dr Anju Lilaramani</h3>
      <p>COO</p>
    </div>
  </li>
  <li class="member">
    <div class="member-image">
       <img src="images/team/Dr.Shilika.png" alt="">
    </div>
    <div class="member-info">
      <h3 style="font-size: 22px;color: #4b0859;">Dr Shilika Lilaramani</h3>
      <p>MD - Strategy, Innovation and Marketing</p>
    </div>
  </li>
  <li class="member">
    <div class="member-image">
      <img src="images/team/Asheesh.png" alt="">
    </div>
    <div class="member-info">
      <h3 style="font-size: 22px;color: #4b0859;">Mr. Adheesh Lilaramani</h3>
      <p>Data - Driven Process Improvement</p>
    </div>
  </li>
</ul>
  		    </div>
  		</div>
  	</section>
  	
  	<section class="our-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/Dr Vijay Lilaramani.png" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dr Vijay Lilaramani</h3>
                            <span class="post">CEO</span>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                           <img src="images/team/Dr Anju mam.png" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dr Anju Lilaramani</h3>
                            <span class="post">COO</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/Dr.Shilika.png" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dr Shilika Lilaramani</h3>
                            <span class="post">MD - Strategy, Innovation and Marketing </span>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                           <img src="images/team/Asheesh.png" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mr. Adheesh Lilaramani</h3>
                            <span class="post">Data - Driven Process Improvement </span>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  	function inVisible(element) {
  //Checking if the element is
  //visible in the viewport
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  //animating the element if it is
  //visible in the viewport
  if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
    animate(element);
}

function animate(element) {
  //Animating the element if not animated before
  if (!element.hasClass('ms-animated')) {
    var maxval = element.data('max');
    var html = element.html();
    element.addClass("ms-animated");
    $({
      countNum: element.html()
    }).animate({
      countNum: maxval
    }, {
      //duration 5 seconds
      duration: 5000,
      easing: 'linear',
      step: function() {
        element.html(Math.floor(this.countNum) + html);
      },
      complete: function() {
        element.html(this.countNum + html);
      }
    });
  }

}

//When the document is ready
$(function() {
  //This is triggered when the
  //user scrolls the page
  $(window).scroll(function() {
    //Checking if each items to animate are 
    //visible in the viewport
    $("h2[data-max]").each(function() {
      inVisible($(this));
    });
  })
});
</script>
	
  	<?php include('footer.php');?>
   