	<?php
		$title = "Contact Us || XYZ";
		include 'header.php';
	?>

	<!--Start Slider Area-->
	<section id="slider-my" class="slider-area">
		<div class="overlay"></div>
		<!--Start Slider-->
		<div class="container s-col">
			<div class="row s-col">
				<div class="col-12 s-col">
					<div class="slider-inner">
						<!-- <span>Digital Solution Box</span> -->
						<h1 class="caption-title">Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
		<!--End Slider-->
	</section>
	<!--End Slider Area-->

	<!-- free consultation start -->
	<div id="consult" class="consultation-form pt-60 pb-60">
		<div class="google_map_wrapper">
			<div id="map"></div>
		</div>
		<!-- /.theme-title-one -->
		<div class="container">
			<div class="container_relative">
				<div class="contactFormrow row">
					<div class="col-lg-6 contact-address">
						<h4>Contact Us</h4>
						
						<div class="con-num">
							<a class="d-block">
								<i class="fa fa-map-marker"></i>
								##########
							</a>
							<a class="d-block" href="tel: +x-xxx-xxx-xxxx">
								<i class="fa fa-phone"></i>
								+x-xxx-xxx-xxxx
							</a>
							<a class="d-block" href="mailto: contact@Xyz.com">
								<i class="fa fa-envelope"></i>
								contact@Xyz.com
							</a>
							<!-- <a class="d-block" href="#">
								<i class="fa fa-globe"></i>
								devscriptpro.com
							</a> -->
						</div>
						
					</div>
					<div class=" col-lg-6 bg-white">
						<div class="form-wrapper">
							<h4>
								Send Us a Message
							</h4>
							<form action="mailsend.php" method="POST" class="theme-form-one">
								<div class="row">
									<div class="col-md-6">
										<input placeholder="Name *" id="name" name="name" type="text" required>
									</div>
									<div class="col-md-6">
										<input placeholder="Phone *" id="phone" name="phone" type="text">
									</div>
									<div class="col-md-6">
										<input placeholder="Email *" id="email" name="email" type="email" required>
									</div>
									<div class="col-md-6">
										<input placeholder="Subject *" id="subject" name="subject" type="text" required>
									</div>
									<div class="col-12">
										<textarea placeholder="Message" id="message" name="message" required></textarea>
									</div>
								</div>
								<!-- /.row -->
								<button class="mybtn">Send Message</button>
							</form>
						</div>
						<!-- /.form-wrapper -->
					</div>
					<!-- /.col- -->
				</div>
			</div>
			<!-- /.main-content -->
		</div>
		<!-- /.container -->
	</div>
	<!-- free consultation End -->


	<?php
		include 'footer.php';
	?>