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
		<meta name="author" content="colorlib">
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
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<link rel="icon" href="img/logo.png"/>
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="home.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="home.php">Home</a></li>
			          <li><a href="home.php#about">About</a></li>
			          <li><a href="home.php#services">Services</a></li>
			          <li><a href="home.php#portfolio">Portfolio</a></li>
			          <li><a href="home.php#contact">Contact</a></li>
			          <li><a href="blog.php">Blog</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative blog-home-banner" id="home" style="margin-bottom: 70px;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white" style="font-family: BlackChancery;">
								<i>Home  >  Blog</i>				
							</h1>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start top-category-widget Area -->
			<!-- End top-category-widget Area -->
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 posts-list">
							<?php
								//define how many results per page
								 $results_per_page = 5;  
								 
								//find out the number of results stored in the database
								$result = mysqli_query($db, "SELECT * FROM posts");
								$num_of_results = mysqli_num_rows($result);
				
								//determine the number of pages available
								$num_of_pages = ceil($num_of_results/$results_per_page);
				
								//determine which page number visitor is currently on
								if (!isset($_GET['page'])) {
									$page = 1;
								}else{
									$page = $_GET['page'];
								}
				
								//determine the sql LIMIT starting number for the results on the displaying page
								$this_page_first_result = ($page-1)*$results_per_page;
								//retrieve selected results from database and display them on page
								$sql = "SELECT * FROM posts ORDER BY postid DESC LIMIT " .$this_page_first_result.','.$results_per_page;
								$res = mysqli_query($db, $sql);
								//$result = mysqli_query("SELECT * FROM posts ORDER BY postid DESC LIMIT 10");

								if($res){
									while($row = mysqli_fetch_array($res)){
										$postID = $row["postid"];
										$featimg = $row["featimage"];
										$postTITLE = $row["posttitle"];
										$TandD = $row["postdate"];
										$slugd = $row["sluggedTitle"];
										$views = $row["views"];
										$blogpost = $row["blogPost"];
										$query = "SELECT comments.postid, posts.postid FROM comments, posts WHERE comments.postid=posts.postid";
										$query_run = mysqli_query($db, $query);
										$query_num_rows = mysqli_num_rows($query_run);

										
										echo '<div class="single-post row">';
										echo '<div class="col-lg-3  col-md-3 meta-details">';
										echo '<div class="user-details row">
												<p class="date col-lg-12 col-md-12 col-6">'.$TandD.' <span class="lnr lnr-calendar-full"></span></p>
												<p class="view col-lg-12 col-md-12 col-6">'.$views.' <span class="lnr lnr-eye"></span></p>
												<p class="comments col-lg-12 col-md-12 col-6">'.$query_num_rows.' Comments <span class="lnr lnr-bubble"></span></p>						
											</div>
											</div>';
										echo '<div class="col-lg-9 col-md-9 ">
												<div class="feature-img">
													<img class="img-fluid" src="../img/blog/'.$featimg.'" alt="'.$postTITLE.'">
												</div>
												<a class="posts-title" href="post.php?p='.$slugd.'"><h3 style="text-transform:capitalize;">'.$postTITLE.'</h3></a>
												<p class="excert">
													'.substr($blogpost, 0, strpos($blogpost, ".")+1).'
												</p>
												<a href="post.php?p='.$slugd.'" class="primary-btn">View More</a>
											</div>';
										echo '</div>';
										
									}
								}

							?>
		                    <nav class="blog-pagination justify-content-center d-flex col-sm-11 col-sm-push-1">
								<?php
								
								
								echo '<ul class="pagination">
									<li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>';
									//display the links to the pages
									for ($page=1; $page<=$num_of_pages; $page++) {
										
											echo '<li class="page-item"><a href="blog.php?page='.$page.'" class="page-link">'.$page.'   </a></li>';
										
									}
									echo '<li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
									</ul>';
								?>
							</div>
		                    </nav>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			
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
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://bit.ly/2W2gqdm" target="_blank">Josef</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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


		</body>
	</html>