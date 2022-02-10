<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div style='background: #204d7d  ;border-bottom: 1px solid #fff;padding: 10px 0px;'>
				<div class='container text-right'>
					<ul class="social-icons hideInMobile" style='border: none;'>
						<li><a target='_blank' style='color:#fff;' href="./assets/pdf/Biyanis Brochure.pdf"><span class="fa fa-download" aria-hidden="true"></span> Prospectus</a></li>
						<li><a href="tel:+91 8898-512-070" style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;'><span class="fa fa-phone" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://api.whatsapp.com/send/?phone=918898512070&text=Hello+Biyani%27s&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.facebook.com/biyanissuper30/"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.instagram.com/biyanis_super30/?hl=en"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.google.com/maps/place/Biyanis+Jee+Neet+Private,+Dev+Paradise,+C+103,+Beverly+Park,+Mira+Road,+Mumbai,+Maharashtra+401107/@19.289685,72.869063,14z/data=!4m2!3m1!1s0x3be7b17986c7d209:0xaa39879900fa17d3?hl=en&gl=IN"><span class="fa fa-map-marker" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.classmatrix.org/signin/biyanis.php" target='_blank'>Sign in &nbsp;<span class="fa fa-lock" aria-hidden="true"></span></a></li>
						<li data-toggle="modal" data-target="#enquireModal"><a style='font-weight: bold;color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;animation: blinker 1s linear infinite;' href='#'>Enquiry & Admission	</a></li>
					</ul>
					<div class="social-icons hideInDesktop noMargin" style="border: none;padding: 4px 0px;">
						<span><a href="tel:+91 8898-512-070" style='color:#fff;border-right: 1px solid #cfcfcf;padding:0px 15px;'><span class="fa fa-phone" aria-hidden="true"></span></a></span>
						<span><a target='_blank' style='color:#fff;border-right: 1px solid #cfcfcf;padding:0px 15px;' href="https://api.whatsapp.com/send/?phone=918898512070&text=Hello+Biyani%27s&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></span>
						<span><a target='_blank' style='color:#fff;padding:0px 15px;' href="./assets/pdf/Biyanis Brochure.pdf"><span class="fa fa-download" aria-hidden="true"></span></a></span>
						
						<span data-toggle="modal" data-target="#enquireModal"><a style='font-weight: bold;color:#fff;border-left: 1px solid #cfcfcf;padding-left: 15px;animation: blinker 1s linear infinite;' href='#'>Enquiry & Admission	</a></span>
					</div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-0 px-0" style='border-bottom: 2px solid #c52c4d;'>
					<a class="navbar-brand" href="index.php" style='max-width: 75%;'>
						<img class='logoImage' src="assets/images/biyanissuper30-logo.png" alt="Biyani's Super 30" title="Biyani's Super 30" />
					</a>
					<div class="collapse navbar-collapse hideInMobile" id="navbarSupportedContent" style='justify-content: flex-end;' >
						<div class="phone" style='margin-right: 1px;'>
						  <a href="mailto:info@biyanissuper30.com" style="display: block;"><span class="fa fa-envelope-o" aria-hidden="true" style='font-size: 1.25em;padding-right: 2px;'></span> info@biyanissuper30.com</a>
						</div>
						<div class="phone">
						  <a href="tel:+91 72088-88694" style="display: block;"><span class="fa fa-phone" aria-hidden="true" style='font-size: 1.25em;padding-right: 2px;'></span> +91 72088-88694</a>
						</div>
					</div>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>
				</nav>
				<nav class="navbar navbar-expand-lg navbar-light py-0 px-0">
					

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item <?php if($curPageName == "index.php") echo 'active'; ?>">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item <?php if($curPageName == "aboutus.php") echo 'active'; ?>">
								<a class="nav-link" href="aboutus.php">About Us</a>
							</li>
							<li class="nav-item <?php if($curPageName == "teachers.php") echo 'active'; ?>">
								<a class="nav-link" href="teachers.php">Teacher's Panel</a>
							</li>
							<li class="nav-item <?php if($curPageName == "course.php") echo 'active'; ?>">
								<a class="nav-link" href="course.php">Courses Offered</a>
							</li>
							
							<li class="nav-item <?php if($curPageName == "gallery.php") echo 'active'; ?>">
								<a class="nav-link" href="gallery.php">Gallery</a>
							</li>
							<li class="nav-item <?php if($curPageName == "ourbranch.php") echo 'active'; ?>">
								<a class="nav-link" href="ourbranch.php">Our Branches</a>
							</li>
							<li class="nav-item <?php if($curPageName == "testimonial.php") echo 'active'; ?>">
								<a class="nav-link" href="testimonial.php">Testimonials</a>
							</li>
							<li class="nav-item <?php if($curPageName == "contact-us.php") echo 'active'; ?>">
								<a class="nav-link" href="contact-us.php">Contact Us</a>
							</li>
						</ul>
						<ul class="social-icons hideInDesktop" style="background: #c52c4d ;">
							<li><a href="tel:+91 72088-88694" style="display: block;color: #fff;"><span class="fa fa-phone" aria-hidden="true" style='font-size: 1.25em;padding-right: 2px;'></span> +91 72088-88694</a></li>
						</ul>
						<ul class="social-icons hideInDesktop" style='margin-top: 0px;border-top: none;'>
							<li><a target='_blank' href="https://api.whatsapp.com/send/?phone=917900040194&text=Hello+Biyani%27s%20JEE%20NEET%20Private!&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.facebook.com/Biyanis-JEE-NEET-Private-102050525281179"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.instagram.com/biyanisjeeneetprivate/?hl=en"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.classmatrix.org/signin/biyanis.php" target='_blank'>Sign in &nbsp;<span class="fa fa-lock" aria-hidden="true"></span></a></li>
							
						</ul>
						<div class="phone hideInMobile" style='height: 50px;'></div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>