<?php 
	require_once('admin/pages/config.php');
?>
<!DOCTYPE html> <!-- html v5 -->
<html lang="en"> <!-- default language english -->
<head>
	<meta charset="UTF-8"> <!-- UTF-8 for All Standart language -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institute Management System</title> <!-- site title -->
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet"> 
	 <!-- All CSS  -->
	 <link rel="stylesheet" href="css/bootstrap-theme.min.css"> <!-- bootstrap theme css -->
	 <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrp css -->
	 <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- font-awesome css  -->
	 <link rel="stylesheet" href="css/jquery.newsticker.min.css">
	 <link rel="stylesheet" href="css/owl.carousel.min.css"> <!-- owl carousel -->
	 <link rel="stylesheet" href="css/owl.theme.default.min.css"> <!-- owl carousel -->
	 <link rel="stylesheet" href="css/jquery.bxslider.min.css"> <!-- bx slider -->
	 <link rel="stylesheet" href="css/style.css"> <!-- Main style -->
	 <link rel="stylesheet" href="css/nav.css"> <!-- Main style -->
	 <!-- /CSS  -->
	 <style>
	 	.announcement_inner{
		 	height: 30px;
		 	padding: 8px;
		 	width: 100%;
		    overflow: hidden;
		    border:none;
		    background: #fff;
		    border-radius: 5px;
		    -webkit-border-radius: 5px;
		    -moz-border-radius: 5px;
		    display: inline-block;
		    box-shadow: none;
		}
		.announcement_inner a p{
			color: #333;
			font-weight: 700;
	 	}
	 </style>
</head>
<body>
<!-- ============= markup start here ================== -->
<!-- header section -->
<header class="header-section box">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="ims logo"></a>
					</div>
					<!-- /logo -->
				</div>
				<div class="col-sm-4 col-md-8">
					<div class="header-contact pull-right mr15px">
						<ul>
							<li><a href="#"><i class="fa fa-envelope-o fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-rss fa-2x"></i></a></li>
						</ul>
					</div>
					<div class="header-search mr15px">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="top_search" class="form-control search-btn-field" placeholder="Search.." />
								<i class="search-icon fa fa-search" aria-hidden="true"></i>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
</header>
<!-- / header section -->

<!-- nav section -->
<section class="nav-section box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">	
			<!-- nav -->
				<!-- / mobile icon -->
				<div id="navicondiv" class="nav-icon-div">
			          		<span id="navicon" class="glyphicon glyphicon-menu-hamburger"></span>
			        </button>	
				</div>
				<!-- / mobile icon -->
				<nav>
					<ul class="menu">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About 
							<!-- nav indicator -->
							<span class="nav-indicator">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</span>
							<!-- nav indicator -->
							</a> 
							<!-- submenu level one -->
							<ul class="sub-menu">
								<li><a href="#history">History</a></li>
								<li><a href="#">Menu Item 2</a></li>
								<li><a href="#">Menu Item 2</a></li>
							</ul>
						</li>
						<li><a href="#">Administration
							<!-- nav indicator -->
							<span class="nav-indicator">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</span>
							<!-- nav indicator -->
							</a> 
							<!-- submenu level one -->
							<ul class="sub-menu">
								<li><a href="#">Menu Item 1</a></li>
								<li><a href="#">Menu Item 2</a></li>
								<li>
									<a href="#">Menu Item 2
										<!-- nav indicator -->
										<span class="nav-indicator">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										<!-- nav indicator -->
									</a>
									<!-- sub-menu two-->
									<ul class="sub-menu">
										<li><a href="#">Menu Item 3</a></li>
										<li><a href="#">Menu Item 3</a></li>
										<li>
											<a href="#">Menu Item 3
												<!-- nav indicator -->
												<span class="nav-indicator">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
												</span>
												<!-- nav indicator -->
											</a>
										 <!-- submenu level three -->
										 <ul class="sub-menu">
											<li><a href="#">Menu Item 4</a></li>
											<li><a href="#">Menu Item 4</a></li>
											<li><a href="#">Menu Item 4</a></li>
										</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="academics.html">Academics
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li>
							<a href="admission.html">Admission
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li>
							<a href="faculty.html">Faculty
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li>
							<a href="career.html">Career
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li>
							<a href="gallery.html">Gallery
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav> <!-- nav end  -->
			</div>
		</div>
	</div>
</section>
<!-- /nav section -->

<!-- latest news -->
<section class="announcement box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-news-left">
					<span>Announcement: </span>
				</div>
				<div class="latest-news-right">
					<div class="marquee announcement_inner" data-direction='up' data-duration='2000' data-pauseOnHover="true">
					<?php 
						$slt = "SELECT * FROM announcement ORDER BY id DESC";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ ?>
							<a href="#">
								<p><?= $data['announcements']; ?></p>
							</a>
						<?php	}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /latest news -->

<!-- online admission section -->
<section class="online-admission section-padding box" style="background: #fff">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="addmission-inner">
					<h1 class="text-center">Online Admission Form</h1>
					<p><strong>Instruction:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae doloribus libero natus, doloremque? In, nemo quasi voluptatibus ducimus asperiores dicta, deserunt voluptatum architecto, vitae numquam impedit ratione sint ipsa pariatur fugit corrupti reprehenderit quo quibusdam non. Laborum eos ullam molestiae ratione similique ipsa sit aperiam consequuntur impedit unde. Deserunt, numquam</p>

					<p style="color: red">* Marks Require, Fill This Field Must.</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form action="" method="post">
								<!-- form element -->
								<div class="form-group">
									<label for="sub" class="control-label col-sm-4">Application For Admission in</label>
									<div class="col-sm-8">
										<select class="form-control" id="sub">
										  <option selected>CSE</option>
										  <option>EEE</option>
										  <option>BBA</option>
										  <option>Math</option>
										  <option>SS</option>
										</select>
									</div>
								</div>
								<!-- form element -->
								<!-- form element -->
								<div class="form-group">
									<label for="sub" class="control-label col-sm-4">Name of the applicant</label>
									<div class="col-sm-8">
										<input type="text" name="name" id="name" class="form-control"/>
									</div>
								</div>
								<!-- form element -->

									<div class="form-group">
										<label for="fname">Father's Name</label>
										<input type="text" name="fname" id="fname" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="mname">Mother's Name</label>
										<input type="text" name="mname" id="mname" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="birthdate">Date of Birth</label>
										<input type="date" name="birthdate" id="birthdate" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="maddress">Mailing Address</label>
										<textarea name="maddress" id="maddress" class="form-control" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="phone">Phone No</label>
										<input type="text" maxlength="14" name="birthdate" id="birthdate" class="form-control"/>
									</div>
									<!-- academics -->


								<fieldset class="scheduler-border">
								 <legend class="scheduler-border">Bootstrap Horizontal Form</legend>
									 <form class="form-horizontal">
										 <div class="form-group">
										 	<label for="formGroupExampleInput" class="control-label col-sm-2">Name</label>
											 <div class="col-sm-10">
											   <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jane Doe">
											 </div>
										 </div>
										 <div class="form-group">
										 <label for="formGroupExampleInput2" class="control-label col-sm-2">Email</label>
										 <div class="col-sm-10">
										 <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="jane.doe@example.com">
										 </div>
										 </div>
										 <div class="form-group row">
										 <div class="offset-sm-2 col-sm-7 pull-right">
										 <button type="submit" class="btn btn-primary">Sign in</button>
										 </div>
										 </div>
									 </form>
								 </fieldset>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- /online admission section -->

<!-- footer section -->
<footer class="footer-section section-padding box">
	<!-- footer top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="about-link">
						<div class="title">
							<h4>About</h4>
						</div>
						<ul>
							<li><a href="#"> About link</a></li>
							<li><a href="#"> About link</a></li>
							<li><a href="#"> About link</a></li>
							<li><a href="#"> About link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="Academic-link">
						<div class="title">
							<h4>Academics</h4>
						</div>
						<ul>
							<li><a href="#"> Academic link</a></li>
							<li><a href="#"> Academic link</a></li>
							<li><a href="#"> Academic link</a></li>
							<li><a href="#"> Academic link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="Academic-link">
						<div class="title">
							<h4>Resources</h4>
						</div>
						<ul>
							<li><a href="#"> Resources link</a></li>
							<li><a href="#"> Resources link</a></li>
							<li><a href="#"> Resources link</a></li>
							<li><a href="#"> Resources link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="Academic-link">
						<div class="title">
							<h4>Campuse Life</h4>
						</div>
						<ul>
							<li><a href="#"> Campus link</a></li>
							<li><a href="#"> Campus link</a></li>
							<li><a href="#"> Campus link</a></li>
							<li><a href="#"> Campus link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="Academic-link">
						<div class="title">
							<h4>Important Links</h4>
						</div>
						<ul>
							<li><a href="#"> Important link</a></li>
							<li><a href="#"> Important link</a></li>
							<li><a href="#"> Important link</a></li>
							<li><a href="#"> Important link</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="social-link">
						<div class="title">
							<h4>Connect with Us</h4>
						</div>
						<ul>
							<li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-2x fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-2x fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-2x fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /footer top -->
	
	<!-- footer bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>2017-2017 &copy; Institute Management System. All Right Reserved.</p>
				</div>
				<div class="col-md-4">
					<strong>Developed by </strong><a class="developer" href="#">SIMT- CMT Batch-2013-2014</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /footer bottom -->
</footer>
<!-- /footer section -->

<!-- ================= /markup end here ========== -->

<!-- All javaScript -->
<!-- <script src="js/jquery-1.12.4.min.js"></script> --> <!-- jquery -->
<script src="js/jquery-2.2.4.min.js"></script> <!-- jquery -->
<script src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script src="js/nav.js"></script> <!-- bootstrap js -->
<script src="js/jquery.newsticker.min.js"></script>
<script src='js/jquery.marquee.min.js'></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/custom.js"></script> <!-- js call -->
<!-- / All javaScript -->
</body>
</html>