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
				<li class="active"><a href="index.php">Home</a></li>
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


  <!-- Section: pricing -->
  <section id="pricing" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
          <div class="section-heading text-center">
          <h2 class="h-bold">Self Medication</h2>
          </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: pricing -->

 
  					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="panel panel-skin">
							<div class="panel-heading">

									</div>
									<div class="panel-body">
									  <form action="insertSelf.php" method="POST">

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
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Street Name And Number </label>
														<input type="stName_No" name="stName_No" class="form-control input-md" required>
												</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>City </label>
														<input type="city" name="city" class="form-control input-md" required>
												</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Postal Code </label>
														<input type="psCode" name="psCode" class="form-control input-md" required>
												</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Form Of Payment </label>
														<select name="formOfPayment" class="form-control input-md" required>
														<option value="Credit Card">Credit Card</option>
														<option value="Cash">Cash</option>
														</select>
												</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label>Delivery (Not around PTA) </label>
														      <select name="Delivery (Not around PTA)" class="form-control input-md" required>
																  <option value="yes">Yes</option>
																  <option value="no">No</option>
																 </select>
												</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
														<label> Describe problem </label>
														<input type="selfMed" name="selfMed" class="form-control input-md" required>
												</div>
								</div> 

    <td><input type="submit" value="Submit"  class="btn btn-skin btn-block btn-lg"></td>

 </form>

	<footer>
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
