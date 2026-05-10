<?php
$services = [
	'website-development' => [
		'title' => 'Website Development',
		'headline' => 'Websites that help Christian missions communicate clearly and serve better.',
		'icon' => 'assets/img/icon/website-development.svg',
		'intro' => 'We build responsive, secure, and easy-to-manage websites for churches, schools, hospitals, colleges, ministries, and mission organizations. Every website is planned around your audience, your message, and your day-to-day ministry needs.',
		'details' => [
			'School and college websites with admission, department, gallery, and announcement sections.',
			'Church and ministry websites for sermons, events, prayer requests, newsletters, and outreach.',
			'Hospital and clinic websites with departments, appointment enquiry forms, and patient information.',
			'Donation pages, contact forms, landing pages, blogs, and ongoing content support.',
		],
		'ideal' => 'Ideal for institutions that need a trustworthy online presence and a simple way to keep people informed.',
	],
	'mobile-app-development' => [
		'title' => 'Mobile App Development',
		'headline' => 'Mobile apps for communication, learning, care, and community engagement.',
		'icon' => 'assets/img/icon/mobile-app.svg',
		'intro' => 'We create mobile apps that help mission organizations stay connected with students, parents, members, patients, donors, and ministry teams. Apps can be built around communication, service delivery, learning, and daily engagement.',
		'details' => [
			'Parent communication apps for schools and colleges.',
			'Church member apps for announcements, sermons, giving, events, and prayer requests.',
			'Hospital appointment and patient communication apps.',
			'Learning apps, discipleship tools, event registration, and ministry resource apps.',
		],
		'ideal' => 'Ideal when your audience needs quick access to updates, services, or resources from their phone.',
	],
	'custom-software-development' => [
		'title' => 'Custom Software Development',
		'headline' => 'Purpose-built systems for the way your institution actually works.',
		'icon' => 'assets/img/icon/custom-software.svg',
		'intro' => 'Many ministries and institutions outgrow spreadsheets and manual processes. We design custom software that simplifies administration, reporting, communication, and service workflows.',
		'details' => [
			'Admission, enquiry, student, staff, and member management systems.',
			'Donation, donor, project, and outreach tracking tools.',
			'Appointment, inventory, reporting, and internal workflow systems.',
			'Dashboards that help leaders see important information clearly.',
		],
		'ideal' => 'Ideal for organizations that need a system designed around their mission, not a generic tool.',
	],
	'technical-training-workshops' => [
		'title' => 'Technical Training & Workshops',
		'headline' => 'Practical technology training for staff, students, and ministry teams.',
		'icon' => 'assets/img/icon/training-workshop.svg',
		'intro' => 'We help Christian institutions become more confident with technology through hands-on workshops and practical training sessions. Training can be customized for beginners, administrators, teachers, students, and ministry workers.',
		'details' => [
			'AI tools for productivity, content, administration, and teaching support.',
			'Cybersecurity awareness, online safety, and responsible digital habits.',
			'Website management, content updates, email, cloud storage, and collaboration tools.',
			'Basic coding, digital ministry tools, presentations, design, and classroom technology.',
		],
		'ideal' => 'Ideal for teams that want to use technology wisely without feeling overwhelmed.',
	],
	'it-consulting-ai-solutions' => [
		'title' => 'IT Consulting & AI Solutions',
		'headline' => 'Clear technology guidance for smarter decisions and better stewardship.',
		'icon' => 'assets/img/icon/ai-consulting.svg',
		'intro' => 'We help ministries and institutions choose the right tools, improve existing systems, and use AI responsibly. Our consulting focuses on practical value, security, affordability, and long-term usefulness.',
		'details' => [
			'Technology audits and digital roadmap planning.',
			'AI workflow ideas for administration, communication, content, and reporting.',
			'Software selection, process improvement, and digital transformation guidance.',
			'Support for data organization, automation, and responsible technology use.',
		],
		'ideal' => 'Ideal when you know technology can help, but need clarity on what to build or improve first.',
	],
	'cloud-hosting-solutions' => [
		'title' => 'Cloud and Hosting Solutions',
		'headline' => 'Reliable hosting, cloud setup, backups, and technical care.',
		'icon' => 'assets/img/icon/cloud-hosting.svg',
		'intro' => 'We provide hosting and cloud support so your websites, email, files, and digital systems stay dependable. We focus on simple setups, security, backups, and support your team can understand.',
		'details' => [
			'Website hosting, domain setup, SSL, email setup, and DNS support.',
			'Cloud storage and collaboration setup for teams and institutions.',
			'Backups, uptime monitoring, maintenance, and security updates.',
			'Migration support when moving from old hosting or scattered tools.',
		],
		'ideal' => 'Ideal for organizations that need reliable digital infrastructure without managing everything alone.',
	],
];

$serviceSlug = $serviceSlug ?? 'website-development';
$service = $services[$serviceSlug] ?? $services['website-development'];
$serviceUrl = 'https://techforkingdom.com/' . $serviceSlug . '.php';
$serviceDescription = $service['title'] . ' for Christian missions, churches, schools, hospitals, colleges, NGOs, and ministries by TechForKingdom.';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
		<meta name="description" content="<?php echo htmlspecialchars($serviceDescription); ?>">
		<meta name="keywords" content="TechForKingdom, Christian missions technology, <?php echo htmlspecialchars($service['title']); ?>, church technology, school technology, ministry software">
		<meta name="author" content="TechForKingdom">
		<meta name="robots" content="index, follow">
		<meta name="theme-color" content="#0f315f">
		<link rel="canonical" href="<?php echo htmlspecialchars($serviceUrl); ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo htmlspecialchars($serviceUrl); ?>">
		<meta property="og:title" content="<?php echo htmlspecialchars($service['title']); ?> | TechForKingdom">
		<meta property="og:description" content="<?php echo htmlspecialchars($serviceDescription); ?>">
		<meta property="og:image" content="https://techforkingdom.com/assets/img/bg/home-bg.jpg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="675">
		<meta property="og:image:alt" content="<?php echo htmlspecialchars($service['title']); ?> by TechForKingdom">
		<meta property="og:site_name" content="TechForKingdom">
		<meta property="og:locale" content="en_IN">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="<?php echo htmlspecialchars($service['title']); ?> | TechForKingdom">
		<meta name="twitter:description" content="<?php echo htmlspecialchars($serviceDescription); ?>">
		<meta name="twitter:image" content="https://techforkingdom.com/assets/img/bg/home-bg.jpg">
		<title><?php echo htmlspecialchars($service['title']); ?> | TechForKingdom</title>
		<script type="application/ld+json">
		<?php
		echo json_encode([
			'@context' => 'https://schema.org',
			'@type' => 'Service',
			'name' => $service['title'],
			'description' => $serviceDescription,
			'url' => $serviceUrl,
			'provider' => [
				'@type' => 'Organization',
				'name' => 'TechForKingdom',
				'url' => 'https://techforkingdom.com/',
				'email' => 'info@techforkingdom.com',
				'telephone' => '+91-9663920875',
			],
			'areaServed' => ['India', 'Global'],
			'audience' => [
				'@type' => 'Audience',
				'audienceType' => 'Christian missions, churches, schools, hospitals, colleges, NGOs, and ministries',
			],
		], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
		?>
		</script>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<link rel="stylesheet" href="assets/css/fonts.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/menu.css?v=5">
		<link rel="stylesheet" href="assets/css/style.css?v=21">
		<link rel="stylesheet" href="assets/css/responsive.css?v=8">
	</head>

    <body data-spy="scroll" data-offset="80">

		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>

		<?php include 'includes/navigation.php'; ?>

		<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1><?php echo htmlspecialchars($service['title']); ?></h1>
					</div>
				  </div>
				</div>
			</div>
		</section>

		<section class="marketing_area service_detail_area section-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="marketing_content service_detail_intro">
							<img src="<?php echo htmlspecialchars($service['icon']); ?>" class="img-fluid service_detail_icon" alt="<?php echo htmlspecialchars($service['title']); ?> icon" />
							<h2><?php echo htmlspecialchars($service['headline']); ?></h2>
						</div>
					</div>
					<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="marketing_text">
							<p><?php echo htmlspecialchars($service['intro']); ?></p>
							<p><?php echo htmlspecialchars($service['ideal']); ?></p>
							<a class="btn_one" href="contact.php">Discuss this service</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="marketing_list_area service_detail_list section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2>What this can include</h2>
					<p>Each solution can be shaped to your institution, audience, budget, and ministry goals.</p>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
						<div class="row">
							<?php foreach ($service['details'] as $index => $detail) : ?>
							<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.<?php echo $index + 1; ?>s" data-wow-offset="0">
								<div class="single_marketing service_detail_item">
									<div class="marketing_icon_img">
										<i class="fa fa-check"></i>
									</div>
									<h3><?php echo htmlspecialchars($detail); ?></h3>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="service_cta section-padding">
			<div class="container text-center">
				<h2>Ready to explore <?php echo htmlspecialchars($service['title']); ?>?</h2>
				<p>Tell us about your mission, and we will help you choose a practical next step.</p>
				<a class="btn_one" href="contact.php">Contact Us</a>
				<a class="btn_two" href="https://wa.me/919663920875" target="_blank">WhatsApp Us</a>
			</div>
		</section>

		<?php include 'includes/footer.php'; ?>

		<script src="assets/js/jquery-1.12.4.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/jquery.mixitup.js"></script>
		<script src="assets/js/jquery.appear.js"></script>
		<script src="assets/js/jquery.inview.min.js"></script>
		<script src="assets/js/jquery.stellar.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/menu.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
		<script src="assets/js/form-contact.js"></script>
		<script src="assets/js/scrolltopcontrol.js"></script>
		<script src="assets/js/scripts.js?v=2"></script>
    </body>
</html>
