<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
	$to = 'leo@techforkingdom.com';
	$name = trim($_POST['name'] ?? '');
	$email = trim($_POST['email'] ?? '');
	$subject = trim($_POST['subject'] ?? '');
	$message = trim($_POST['message'] ?? '');
	$safeName = trim(str_replace(["\r", "\n", '<', '>'], '', $name));
	$safeEmail = str_replace(["\r", "\n"], '', $email);

	if ($name === '' || $email === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if ($isAjax) {
			http_response_code(422);
			header('Content-Type: application/json');
			echo json_encode(['success' => false, 'message' => 'Please complete the form with a valid email address.']);
			exit;
		}

		header('Location: contact.php?status=invalid#contact');
		exit;
	}

	$emailSubject = 'TechForKingdom Contact Form: ' . preg_replace('/[\r\n]+/', ' ', $subject);
	$body = "New message from the TechForKingdom contact form:\n\n";
	$body .= "Name: {$name}\n";
	$body .= "Email: {$email}\n";
	$body .= "Subject: {$subject}\n\n";
	$body .= "Message:\n{$message}\n";

	$headers = [
		'From: TechForKingdom <no-reply@techforkingdom.com>',
		'Reply-To: ' . $safeName . ' <' . $safeEmail . '>',
		'Content-Type: text/plain; charset=UTF-8',
		'X-Mailer: PHP/' . phpversion(),
	];

	$sent = mail($to, $emailSubject, $body, implode("\r\n", $headers));

	if ($isAjax) {
		header('Content-Type: application/json');
		if ($sent) {
			echo json_encode(['success' => true, 'message' => 'Thank you. Your email was sent successfully.']);
		} else {
			http_response_code(500);
			echo json_encode(['success' => false, 'message' => 'Sorry, your email could not be sent. Please try again or email leo@techforkingdom.com directly.']);
		}
		exit;
	}

	if ($sent) {
		header('Location: thank-you.php');
		exit;
	}

	header('Location: contact.php?status=error#contact');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
		<meta name="description" content="Contact TechForKingdom for websites, apps, software, training, AI consulting, cloud hosting, and digital support for Christian missions and institutions in India and beyond.">
		<meta name="keywords" content="contact TechForKingdom, Christian technology services India, ministry technology support, church website development, school software, hospital software, Bengaluru, Ranchi">
		<meta name="author" content="TechForKingdom">
		<meta name="robots" content="index, follow">
		<meta name="theme-color" content="#0f315f">
		<link rel="canonical" href="https://techforkingdom.com/contact.php">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://techforkingdom.com/contact.php">
		<meta property="og:title" content="Contact TechForKingdom">
		<meta property="og:description" content="Reach TechForKingdom for technology services and product support for Christian missions, churches, schools, hospitals, colleges, and NGOs.">
		<meta property="og:image" content="https://techforkingdom.com/assets/img/bg/home-bg.jpg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="675">
		<meta property="og:image:alt" content="TechForKingdom technology for Christian missions and institutions">
		<meta property="og:site_name" content="TechForKingdom">
		<meta property="og:locale" content="en_IN">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Contact TechForKingdom">
		<meta name="twitter:description" content="Talk to TechForKingdom about websites, apps, software, training, AI consulting, and cloud support.">
		<meta name="twitter:image" content="https://techforkingdom.com/assets/img/bg/home-bg.jpg">
		<!-- SITE TITLE -->
		<title>Contact TechForKingdom</title>			
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
		<link rel="stylesheet" href="assets/css/menu.css?v=5">			
		<link rel="stylesheet" href="assets/css/style.css?v=21">			
		<link rel="stylesheet" href="assets/css/responsive.css?v=8">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "ProfessionalService",
		  "name": "TechForKingdom",
		  "url": "https://techforkingdom.com/contact.php",
		  "email": "leo@techforkingdom.com",
		  "telephone": "+91-9663920875",
		  "areaServed": ["India", "Global"],
		  "address": [
		    {
		      "@type": "PostalAddress",
		      "streetAddress": "Nadagowda Gollahalli",
		      "addressLocality": "Bengaluru",
		      "postalCode": "560077",
		      "addressCountry": "IN"
		    },
		    {
		      "@type": "PostalAddress",
		      "streetAddress": "Kokar",
		      "addressLocality": "Ranchi",
		      "addressRegion": "Jharkhand",
		      "postalCode": "834001",
		      "addressCountry": "IN"
		    }
		  ]
		}
		</script>	</head>
	
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
				  <div class="col-lg-6 col-sm-6 col-xs-12 text-center">
					<div class="single_address">
						<h4>Bengaluru, India</h4>
						<p class="mr_20">Nadagowda Gollahalli<br />Bengaluru - 560 077</p>
						<p><a href="tel:+919663920875">+91-9663920875</a></p>
						<p><a href="mailto:leo@techforkingdom.com">leo@techforkingdom.com</a></p>
					</div>
				  </div><!--- END COL -->
				  <div class="col-lg-6 col-sm-6 col-xs-12 text-center">
					<div class="single_address">
						<h4>Ranchi, India</h4>
						<p class="mr_20">Kokar, Ranchi<br />Jharkhand 834 001</p>
						<p><a href="tel:+919663920875">+91-9663920875</a></p>
						<p><a href="mailto:leo@techforkingdom.com">leo@techforkingdom.com</a></p>
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ADDRESS -->
		
		<!-- START MAP -->
		<div class="map">
			<iframe src="https://www.google.com/maps?q=Nadagowda%20Gollahalli%2C%20Bengaluru%20560077&output=embed" title="TechForKingdom Bengaluru location on Google Maps" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false" tabindex="0"></iframe>
			<div class="map_link text-center">
				<a href="https://maps.app.goo.gl/tFdXhG36hYWvFgyC7" target="_blank" rel="noopener">Open location in Google Maps</a>
			</div>
		</div>	
		<!-- START MAP -->		

		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2 class="section-title-white">Get in touch.</h2>
					<p class="section-title-white"></p>
				</div>				
				<div class="row">					
					<div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<?php if (isset($_GET['status']) && $_GET['status'] === 'invalid') : ?>
								<div class="error">Please complete the form with a valid email address.</div>
							<?php elseif (isset($_GET['status']) && $_GET['status'] === 'error') : ?>
								<div class="error">Sorry, your email could not be sent. Please try again or email leo@techforkingdom.com directly.</div>
							<?php endif; ?>
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
