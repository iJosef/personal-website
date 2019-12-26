	<?php
	include("conn/db.php");
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="josef">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Joseph Emeruwa - a Web Designer & Developer</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="icon" href="img/logo.png"/>
		</head>
		<body id="home">	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="home.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="#home">Home</a></li>
			          <li><a href="#about">About</a></li>
			          <li><a href="#services">Services</a></li>
			          <li><a href="#portfolio">Portfolio</a></li>			          		          
			          <li><a href="#contact">Contact</a></li>
			          <li><a href="blog.php">Blog</a></li>		
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>This is me</h6>
							<h1>Josef Iyke</h1>
							<p style="text-align: justify;">
								A tech savvy with an extraordinary passion for ICT (Information and Communication Technology), Website Development and Programming. My specialty cuts across back end web application development, which i achieve through the usage of PHP and Framework such as Laravel. Every project provides me an opportunity to challenge myself, and improve my knowledge and skills while providing a remarkable user experience. 
							</p>
							<a href="home.php#contact" class="primary-btn text-uppercase">get in touch</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="img/hero-img.png" alt="" style="margin-bottom: 80px;">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120" id="about">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-5 col-md-5 home-about-left">
							<img class="img-fluid" src="img/about-img.png" alt="" style="margin-left: 80px;">
						</div>
						<div class="col-lg-6 col-md-7 home-about-right">
							<h6>About Me</h6>
							<h1 class="text-uppercase">Personal Details</h1>
							<p style="text-align: justify;">
								What motivates me has always come from problem solving and providing lasting solutions. Hence, my adventure into the world of programming has come to pay off especially with my improvement in this field as far as web application solutions is concerned. Ensuring a user has a pleasant experience while surfing the web is something i'm very passionate about.
							</p>
							<p><a href="https://www.facebook.com/IkennaEmeruwa" target="_blank"><span class="fa fa-facebook-square icn"></span></a>&nbsp;&nbsp;<a href="https://www.twitter.com/i_joseff" target="_blank"><span class="fa fa-twitter-square icn"></span></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/joseph-emeruwa" target="_blank"><span class="fa fa-linkedin-square icn"></span></a>&nbsp;&nbsp;<a href="https://github.com/iJosef/" target="_blank"><span class="fa fa-github-square icn" style="color:#000000;"></span></a></p>
							<a href="http://bit.ly/2W2gqdm" target="_blank" class="primary-btn text-uppercase"><img src="img/whatsapp.png" style="height: 20px;width: 20px;" />  Chat on whatsapp</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start services Area -->
			<section class="services-area section-gap" id="services">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">What I Can Do</h1>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<h4>What You Can Expect</h4>
								<p style="text-align: justify;">
									I deliberately work on one task at a time so you can expect full dedication to any project when we are working together. I am friendly, professional and always available to answer any of your questions.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-laptop-phone"></span>
								<h4>What You Need</h4>
								<p style="text-align: justify;">
									As a developer, I know how to create your website to run across devices using the latest technologies available to ensure great user experience.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-users"></span>
								<h4>Collaborative</h4>
								<p style="text-align: justify;">
									Some web projects require working with a team in order to achieve a successful completion. I am always ready to work with a team of developers and UI/UX designers to tackle the most complex web applications.
								</p>
							</div>	
						</div>														
					</div>
				</div>	
			</section>
			<!-- End services Area -->	

			<!-- Start fact Area -->
			
			<!-- end fact Area -->	

			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center" style="margin-bottom: -80px;">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">What I Have Done</h1>
		                    </div>
		                </div>
		            </div>
                                        
                    <div class="filters-content">
                        <div class="row grid">
                        	<?php
                        		$res = mysqli_query($db, "SELECT * FROM portfolio ORDER BY portfolioid DESC LIMIT 6");

                        		if($res){
									while ($row = mysqli_fetch_array($res)) {		
										$p_id = $row['portfolioid'];
										$photo = $row['photo'];
										$tit = $row['title'];
										$desc = $row['description'];
										$web = $row['website'];

										echo '<div class="single-portfolio col-sm-4 all vector" style="margin-bottom: 20px;">
				                            	<div class="relative">
					                            	<div class="thumb">
					                            		<div class="overlay overlay-bg"><h4 style="text-align: center;margin-top: 55px;text-transform: capitalize;"><a href="'.$web.'" style="color:#ffffff;" target="_blank">- '.$tit.' -</a></h4></div>
					                            		 <img class="image img-fluid" src="../img/portfolio/'.$photo.'" alt="'.$tit.'">
					                            	</div>
						                            <a href="../img/portfolio/'.$photo.'" class="img-pop-up">	
														  <div class="middle">
														    <div class="text align-self-center d-flex"><img src="../img/portfolio/preview.png" alt=""></div>
														  </div>
													</a>                          		
				                            	</div>
												<div class="p-inner">
												    <h4 style="text-transform:capitalize;">'.$tit.'</h4>
													<div class="cat">'.$desc.'</div>
												</div>					                               
				                            </div>';
									}
								}
                        	?>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->	

			<!-- Start testimonial Area -->
		    <!-- End testimonial Area -->
		
			<!-- Start price Area -->
			<!-- End price Area -->			
	
			<!-- Start recent-blog Area -->
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Latest posts from my blog</h1>
						</div>
					</div>
					<div class="row">
						<?php
							$result = mysqli_query($db, "SELECT * FROM posts ORDER BY postid DESC LIMIT 3");

                        		if($result){
									while ($row = mysqli_fetch_array($result)) {		
										$pid = $row['postid'];
										$featimg = $row['featimage'];
										$postTITLE = $row["posttitle"];
										$TandD = $row["postdate"];
										$slugd = $row["sluggedTitle"];
										$blogpost = $row["blogPost"];

										echo '<div class="single-recent-blog col-lg-4 col-md-4">
												<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
													<div>
														<img class="img-fluid" src="../img/blog/'.$featimg.'" alt="'.$postTITLE.'">
													</div>
													<div class="meta">
														'.$TandD.'
														<span class="lnr lnr-heart"></span> 15
														<span class="lnr lnr-bubble"></span> 04
													</div>
												</div>							
												<a href="post.php?p='.$slugd.'">
													<h4 style="text-transform:capitalize;">'.$postTITLE.'</h4>
												</a>
												<p>
													'.substr($blogpost, 0, strpos($blogpost, ".")+1).'<a href="post.php?p='.$slugd.'" style="color:#8490ff;"> <u>Read More</u></a>
												</p>
											</div>';
									}
								}
						?>				
					</div>
				</div>
					<div>
					<p class="col-sm-11 col-sm-push-1"><a href="blog.php" class="primary-btn text-uppercase">See More...</a></p>
					</div>	
			</section>
			<!-- end recent-blog Area -->		

		    <!-- Start brands Area -->
		    <!-- End brands Area -->			
            <!-- Start contact -->
            <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="header-text" style="color: #ffffff;">Contact Me</h2><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                	<div class="col-lg-6">
                		<h4 class="header-text" style="color: #ffffff;">Contact Informations</h4><br/>
                		<p><i class="lnr lnr-phone-handset" style="color: #ffffff;"></i>&nbsp;&nbsp;<b style="color: #ffffff;">Tel:</b> <a href="tel:+2348155383532" style="color: #ffffff;"> +234 (0)8155383532</a><br/>&nbsp;&nbsp;<a href="tel:+2348136595944" style="color: #ffffff;"> +234 (0)8136595944</a><br/></p>
                		<p><i class="lnr lnr-envelope" style="color: #ffffff;"></i>&nbsp;&nbsp;<b style="color: #ffffff;">Email: </b><a href="mailto:emeruwajoseph@gmail.com" style="color: #ffffff;">emeruwajoseph@gmail.com</a></p>
                		<p><span style="color: #ffffff;">You can follow me on social media:</span> <br/><a href="https://www.facebook.com/IkennaEmeruwa" target="_blank"><span class="fa fa-facebook-square icn"></span></a>&nbsp;&nbsp;<a href="https://www.twitter.com/i_joseff" target="_blank"><span class="fa fa-twitter-square icn"></span></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/joseph-emeruwa" target="_blank"><span class="fa fa-linkedin-square icn"></span></a>&nbsp;&nbsp;<a href="https://github.com/iJosef/" target="_blank"><span class="fa fa-github-square icn"></span></a></p>
                	</div>
                	<?php
                		if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['message'])){
							// Check for empty fields
							if(empty($_POST['name'])      ||
							   empty($_POST['email'])     ||
							   empty($_POST['phone'])     ||
							   empty($_POST['message'])   ||
							   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
							   {
							   echo "No arguments Provided!";
							   return false;
							   }
							   
							$name = strip_tags(htmlspecialchars($_POST['name']));
							$email_address = strip_tags(htmlspecialchars($_POST['email']));
							$phone = strip_tags(htmlspecialchars($_POST['phone']));
							$message = strip_tags(htmlspecialchars($_POST['message']));
							   
							// Create the email and send the message
							$to = 'emeruwajoseph@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
							$email_subject = "Website Contact Form:  $name";
							$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
							$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
							$headers .= "Reply-To: $email_address";   
							mail($to,$email_subject,$email_body,$headers);
							return true; 
						}        
					?>
                	<form action="home.php" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl primary-btn text-uppercase">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
            <!-- End contact -->
            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    My Passion for solving problems and ICT inspired my adventure into the programming world. Every project provides me an opportunity to improve and also helps me ensure the user gets a pleasant experience while using the web.
                                </p>
                                <p class="footer-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://bit.ly/2W2gqdm" target="_blank">Josef</a></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Stay updated with latest tech trends</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="https://www.facebook.com/IkennaEmeruwa" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.twitter.com/i_joseff" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/joseph-emeruwa" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://github.com/iJosef/" target="_blank"><i class="fa fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/agency.js"></script>
			<script src="js/contact_me.js"></script>
			<script src="js/jqBootstrapValidation.js"></script>
		</body>
	</html>