<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Urban Pharmacy</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Saturday, 8am to 6pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now +27 79 481 5747</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" alt="" width="190" height="55" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#Home">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				  <ul class="dropdown-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="toast">
  <div class="toast-header">
    Toast Header
  </div>
  <div class="toast-body">
    Some text inside the toast body
  </div>
</div>


	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Urban Pharmacy</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 cFlass="h-light">Your <span class="color">HEALTH </span> is our priority!</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable medicine</strong></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Quick service.</strong></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Zero queues.</strong></li>
							<li><span class="fa fa-times fa-2x icon-danger"></span> <span class="list"><strong>No Cough syrups (with codeine) sold without prescription.</strong></li>
							
						</ul>
						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(For free!)</small></h3>

									</div>
									<div class="panel-body">
									<form action="insertAppoint.php" method="POST">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>First Name </label>
														<input type="text" name="name" class="form-control input-md" required>
												</div>
											</div>
											
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Last Name </label>
														<input type="text" name="surname" class="form-control input-md" required>
												</div>
											</div>

										<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Email </label>
														<input type="email" name="email" class="form-control input-md" required>
												</div>
										</div>
										
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Phone Number </label>
														<input type="phone" name="phone" class="form-control input-md" required>
												</div>
											</div>

										<input type="submit" name="submit" class="btn btn-skin btn-block btn-lg">

										<p class="lead-footer">* We'll contact you by phone or email later</p>

									</form>
								</div>
							</div>

						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

  <!-- Section: pricing -->
  <section id="pricing" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Choose Help</h2>
          </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

       <div class="container">

      <div class="row">

				<div class="col-sm-6 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Self Medication</h2>
						<h3><span>From </span>R30<sup>.00</sup> <span>/ Delivery (Not around PTA)</span></h3>

						<div class="price-bottom">
							<a href="self.php" class="btn btn-skin btn-lg">Proceed</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-6 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Prescribed Medication</h2>
						<h3><span>From </span>R20<sup>.00</sup> <span>/ Delivery (Not around PTA)</span></h3>

						<div class="price-bottom">
							<a href="prescription.php" class="btn btn-skin btn-lg">Proceed</a>
						</div>
					</div>
					</div>
				</div>

      </div>

            </div>
  </section>
  <!-- /Section: pricing -->
  
  	<section id="callaction" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>In an emergency? Need help now?</h3>
									<p>We'll call an ambulance to fetch you straight away.</p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="contact.php" class="btn btn-skin btn-lg">Contact Us</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>
	
 <section id="pricing" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-10">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Our Services</h2>
          </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: pricing -->
  <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">
		
        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				

				<img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-stethoscope fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Medical checkup</h5>
						<p>Medical check ups now available.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-wheelchair fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Nursing Services</h5>
						<p>We have a specialized help in case of emergency.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-plus-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Pharmacy</h5>
						<p>We offer the best pharmaceutical help.</p>
					</div>
                </div>
				</div>

            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-h-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Gyn Care</h5>
						<p>Gyn check ups and also ultra scans.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-filter fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Medication</h5>
						<p>Offering a legal medication which is best for the client.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Birth Control</h5>
						<p>Injection, implant and pills available now.</p>
					</div>
                </div>
				</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Urban Parmacy</h5>
						<p>
						Your health is our priority.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 6pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +27 79 481 5747
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> info@urbanpharmacy.co.za
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>2263 Block L, Soshanguve, Tshwane, 0152</p>

					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2019 - Urban Pharmacy. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="index.php" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</php>
