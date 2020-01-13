<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "test";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Urban Pharmacy Admin</title>

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
					<div class="col-sm-6 col-md-12">
					<p class="bold text-center">Urban Pharmacy Admin </p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="admin_index.php">
                    <img src="logo.png" alt="" width="190" height="55" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="admin_index.php">APPOINTMENT</a></li>
				<li ><a href="admin_prescription.php">PRESCRIPTION</a></li>
				<li class="active"><a href="admin_self.php">SELF MEDICATION</a></li>
				<li><a href="admin_files.php">UPLOADED FILES</a></li>
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
          <h2 class="h-bold">SELF MEDICATION</h2>
          </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

       <div class="container">

      <div class="row">

<div class="card shadow mb-8">
  <div class="card-header py-6">
  </div>

  <div class="card-body">
  


    <div class="table-responsive">	

		
                    <?php
                    $result = mysqli_query($conn,"SELECT * FROM self");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="100">
                       
							<thead>
							  <tr>
								<th> ID </th>
								<th> First Name </th>
								<th> Last Name </th>
								<th> E Mail </th>
								<th> Mobile Number </th>
								<th> Address </th>
								<th> City </th>
								<th> Postal Code </th>
								<th> Form of payment </th>
								<th> Delivery (Not around PTA) </th>
								<th> Sickness Description </th>
							  </tr>
							</thead>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["surname"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["phone"]; ?></td>
						<td><?php echo $row["stName_No"]; ?></td>
						<td><?php echo $row["city"]; ?></td>
						<td><?php echo $row["psCode"]; ?></td>
						<td><?php echo $row["formOfPayment"]; ?></td>
						<td><?php echo $row["Delivery (Not around PTA)"]; ?></td>
						<td><?php echo $row["selfMed"]; ?></td>
						
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

    </div>
  </div>
</div>

      </div>

            </div>
  </section>


  
<a href="admin_self.php" class="scrollup"><i class="fa fa-angle-up active"></i></a>

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
