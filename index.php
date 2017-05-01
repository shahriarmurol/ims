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
						<li class="active"><a href="index.php">Home</a></li>
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

<!-- slider section -->
<section class="slider-section box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="images/slides/s-1.jpg" alt="first slides">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/slides/s-2.jpg" alt="second slides">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/slides/slides.png" alt="second slides">
				      <div class="carousel-caption">
				      </div>
				    </div>
			
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- /slider section -->

<!-- informations -->
<section class="informations notice-manage-stdinfo section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="campus-info">
					<img src="images/campus.jpg" alt="" width="280">
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi corporis quisquam, mollitia ab aliquid, laborum odit tempore, eum ullam id maxime similique! Consectetur illo nostrum velit nihil. Modi atque, iusto, quam vero, a recusandae reprehenderit adipisci eius iste odio fugiat aperiam tempora consequatur, at quibusdam cum quaerat. Facilis, nemo!</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="programmes-info">
					<h2> <i class="fa fa-graduation-cap"></i> Academics</h2>
					<p>UNDERGRADUATE PROGRAMS</p>
					<ul>
					<?php 
						$select = "SELECT * FROM undergradute_sub_names";
						$qre = mysqli_query($DBC,$select);
						while($info=mysqli_fetch_array($qre)){   ?>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $info['sub_name']; ?></a></li>
						<?php	}
					?>
					</ul>
					<!-- <button class="btn btn-success btn-sm pull-right">More</button><br/> -->

					<p>GRADUATE PROGRAMS</p>
					<ul>
						<?php 
						$select = "SELECT * FROM gradute_sub_names";
						$qre = mysqli_query($DBC,$select);
						while($info=mysqli_fetch_array($qre)){   ?>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $info['sub_name']; ?></a></li>
						<?php	}
					?>
					</ul>
					<!-- <button class="btn btn-success btn-sm pull-right">More</button><br/> -->
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="news-event">
					<div class="notice-title">
						<h2 class="text-center"><i class="fa fa-newspaper-o"></i>
						Notice Board</h2>
					</div>
					<div class="marquee notice-marquee" data-direction='up' data-duration='5000' data-pauseOnHover="true">
					<?php 
						$slt = "SELECT * FROM notices ORDER BY id DESC";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ ?>
							<a href="#">
								<p><?= $data['notice']; ?></p>
							</a>
						<?php	}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>	
<!-- </section> -->
<!-- /informations -->

<!-- notice and mangenent and student info section -->
<!-- 	<section class="notice-manage-stdinfo section-padding box"> -->
		<p class="empty" style="margin-bottom: 30px;"></p>
		<div class="container">
			<div class="row">
				<!-- management  -->
				<div class="col-md-4">
					<div class="management">
						  <h3>Management</h3>
						  <ul class="nav nav-pills nav-stacked">
						    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Messages<span class="caret"></span></a>
						      		<ul class="dropdown-menu">
						       			 <li><a href="#">Submenu 1-1</a></li>
						       			 <li><a href="#">Submenu 1-2</a></li>
						        		 <li><a href="#">Submenu 1-3</a></li>     
						        	</ul>
						    	</li>
						    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Professor<span class="caret"></span></a>
						      		<ul class="dropdown-menu">
						       			 <li><a href="#">Submenu 1-1</a></li>
						       			 <li><a href="#">Submenu 1-2</a></li>
						        		 <li><a href="#">Submenu 1-3</a></li>                        
						      		</ul>
						    	</li>
						    	<li><a href="#">Deans &amp; Heads</a></li>
						    	<li><a href="#">Administration</a></li>
						    	<li><a href="#">Committees</a></li>
						  </ul>
					</div>
				</div>
				<!-- /management  -->

				<div class="col-md-4">
					<div class="title">
						<h2>Student Info</h2>
						<ul>
							<li><a href="#">Faculty Members</a></li>
							<li><a href="#">Visiting Professors</a></li>
							<li><a href="#">Coordination</a></li>
							<li><a href="#">Notice Board</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
						</ul>
					</div>
				</div>

				<!-- notice board -->
				<div class="col-md-4">
					<h2 class="text-center">Online Admission</h2>
					<!-- 	student apply -->
					<div class="student-apply">
						<a class="btn btn-block btn-success" style="padding: 8px;" href="online-admission.php">Apply Now</a>
					</div>
				</div>
				<!-- /notice board -->
			</div>
		</div>
	</section>
<!-- /notice and mangenent and student info section -->

<!-- activites -->
<!-- /activites -->

<!-- photo gallery + promo video -->
<section class="photo-gellary-and-promo-video section-padding box">
	<div class="gellary-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<h2 class="title text-center">Class &amp; Labs</h2>
				<div class="photo-slider">
					<div class="owl-carousel owl-theme">
					    <div><img src="images/photo-slider.jpg" alt=""></div>
					    <div><img src="images/photo-slide-2.jpg" alt=""></div>
					    <div><img src="images/photo-slider.jpg" alt=""></div>
					    <div><img src="images/photo-slide-2.jpg" alt=""></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
					<!-- promo video -->
				<div class="promo-video">
					<h2 class="title text-center">Promo Video</h2>
					<div class="embed-responsive embed-responsive-16by9">
						    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lkQTe0Wdo2k"></iframe>
						</div>
				</div>
				<!-- fb page -->
				<div class="fb-page">
						 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300&height=214&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="214" style="border:none;overflow:hidden;display: inline-block;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>	
					</div>
			</div>
				   
		</div>
	</div>
</section>
<!-- /photo gallery -->

<!-- teachers/ staffs + fb like page -->
<section class="our-partners section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center title">Our Partners</h2>
				<div class="partner-slider">
					<ul class="bxslider">
					  <li><a href="#"><img src="images/partnrs/bit.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/netsoft.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/softbd.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/nexusti.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/6axis.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/dhka-hber.png" /></a></li>

					  <li><a href="#"><img src="images/partnrs/nospam.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/netsoft.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/softbd.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/nexusti.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/6axis.png" /></a></li>
					  <li><a href="#"><img src="images/partnrs/dhka-hber.png" /></a></li>					  	
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- / teachers/ staffs + fb like page -->

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