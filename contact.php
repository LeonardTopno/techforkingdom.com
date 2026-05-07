<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Orange Contact Form'; 
		$to = 'sekram07@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

	mail($to, $subject, $body, $from) or die("Error!");

	header("location: thank-you.php");
	
	}
	
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Monoline - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">		
		<!-- SITE TITLE -->
		<title>Monoline - Design Agency HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">			
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<!--materialdesignicons Css-->
        <link rel="stylesheet" href="assets/css/fonts.css">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">				
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">					
		<!-- Style CSS -->						
		<link rel="stylesheet" href="assets/css/menu.css?v=4">			
		<link rel="stylesheet" href="assets/css/style.css?v=3">			
		<link rel="stylesheet" href="assets/css/responsive.css?v=4">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<!-- END PRELOADER -->
		<?php include 'includes/navigation.php'; ?>

<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1>Let's Talk</h1>		
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->
		
		<!-- START ADDRESS -->
		<section class="address_area section-padding">
			<div class="container">
				<div class="row">
				  <div class="col-lg-4 col-sm-4 col-xs-12 text-center">
					<div class="single_address">
						<h4>New York</h4>
						<p class="mr_20">133rd Ave Jamaica, <br /> New York(NY)</p>
						<p><a href="tel:415 256 365">+415 256 365</a></p>
						<p><a href="mailto:">admin@monoline.com</a></p>
					</div>
				  </div><!--- END COL -->
				  <div class="col-lg-4 col-sm-4 col-xs-12 text-center">
					<div class="single_address">
						<h4>Los Angeles</h4>
						<p class="mr_20">E 49th St Los Angeles, <br /> California(CA), 90011</p>
						<p><a href="tel:415 256 365">+415 256 365</a></p>
						<p><a href="mailto:">support@monoline.com</a></p>
					</div>
				  </div><!--- END COL -->
				  <div class="col-lg-4 col-sm-4 col-xs-12 text-center">
					<div class="single_address">
						<h4>San Francisco</h4>
						<p class="mr_20">61 Rudden Ave San <br />Francisco, California</p>
						<p><a href="tel:415 256 365">+415 256 365</a></p>
						<p><a href="mailto:">info@monoline.com</a></p>
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ADDRESS -->
		
		<!-- START MAP -->
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>	
		<!-- START MAP -->		

		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2 class="section-title-white">Get in touch.</h2>
					<p class="section-title-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>				
				<div class="row">					
					<div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<form id="contact-form" method="post" action="contact.php" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" name="name" class="form-control" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-6">
										<input type="email" name="email" class="form-control" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" placeholder="Type your message that on your mind..." required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="contact_btn" title="Submit Your Message!">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->					
				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END CONTACT -->		

		<!-- START PARTNER LOGO -->
		<div class="partner-logo section-padding">
			<div class="container">										
				<div class="row text-center">
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_logo single_logo_bm">
							<a href="#"><img src="assets/img/partner/1.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_logo">
							<a href="#"><img src="assets/img/partner/2.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_logo single_logo_bm">
							<a href="#"><img src="assets/img/partner/3.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="single_logo">
							<a href="#"><img src="assets/img/partner/4.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="single_logo">
							<a href="#"><img src="assets/img/partner/5.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
					<div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
						<div class="single_logo">
							<a href="#"><img src="assets/img/partner/6.png" alt="" class="img-fluid"/></a>
						</div>						
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</div>
		<!-- END PARTNER LOGO -->
		<?php include 'includes/footer.php'; ?>

<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>					
		<!-- magnific-popup js -->               
			<script src="assets/js/jquery.magnific-popup.min.js"></script>			
		<!-- jquery mixitup js -->   
			<script src="assets/js/jquery.mixitup.js"></script>			
		<!-- jquery appear js -->
			<script src="assets/js/jquery.appear.js"></script>							
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>	
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>			
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>	
		<!-- Menu js -->
			<script src="assets/js/menu.js"></script>																				
			<script src="assets/js/jquery.sticky.js"></script>			
		<!-- form contact js -->																				
			<script src="assets/js/form-contact.js"></script>		
		<!-- scrolltopcontrol js -->			
			<script src="assets/js/scrolltopcontrol.js"></script>																						
		<!-- scripts js -->
			<script src="assets/js/scripts.js?v=2"></script>		
    </body>
</html>