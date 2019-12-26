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
		<title>
			<?php 
			$pst_id = $_GET['p'];

			if (!empty($pst_id)) {
				$r= mysqli_query($db, "SELECT posttitle FROM posts WHERE sluggedTitle = '$pst_id'");
				while ($row = mysqli_fetch_array($r)) {
					$pstttle = strtolower($row['posttitle']);
				}
				//echo $pstttle;
				echo "available";
			}
			else {
				echo "Ooopsi!!";
			}
			
			?>
		</title>

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
			<style>
				p img{
				  vertical-align: middle;
				  display: block;
				  height: auto;
				  max-width: 100%;
				  text-align: center;
				}
			</style>
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
			<section class="relative about-banner post-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<p class="text-white link-nav" style="font-family: BlackChancery;"><a href="home.php">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog.php">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Post</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-md-8 posts-list">
							<div class="single-post row">
								<?php
								if(isset($_GET["p"])){
										$postID = $_GET ["p"];
										if(!empty($postID)){

										$result = mysqli_query($db, "SELECT * FROM posts WHERE sluggedTitle = '$postID'");

										while ($row = mysqli_fetch_array($result)) {

											function commntCount(){
											global $db;
											$query = "SELECT * FROM comments";
											$query_run = mysqli_query($db, $query);
											$query_num_rows = mysqli_num_rows($query_run);
											return $query_num_rows;
											}
											$com = commntCount();
											$pstttle = $row['posttitle'];
											$a_file = $row['featimage'];
											$b_post = $row['blogPost'];
											$h = $row['views'];
											$pid = $row['postid'];
											$tnd = $row['postdate'];
										}
										echo '<div class="col-md-12">
											<div class="feature-img">
											<img class="img-fluid" src="../img/blog/'.$a_file.'" alt="'.$pstttle.'"/>
											</div></div>									
										<div class="col-lg-3  col-md-3 meta-details">
											<div class="user-details row">
												<p class="date col-lg-12 col-md-12 col-6">'.$tnd.' <span class="lnr lnr-calendar-full"></span></p>
												<p class="view col-lg-12 col-md-12 col-6">'.$h.' <span class="lnr lnr-eye"></span></p>
												<p class="comments col-lg-12 col-md-12 col-6">'.$com.' Comment(s) <span class="lnr lnr-bubble"></span></p>
												<ul class="social-links col-lg-12 col-md-12 col-6">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												</ul>																				
											</div>
										</div>
										<div class="col-lg-9 col-md-9">
											<h3 class="mt-20 mb-20" style="text-transform:capitalize;">'.$pstttle.'</h3>
											<p class="excert">'.$b_post.'</p>
										</div>';
										mysqli_query($db, "UPDATE posts set views = $h + 1 WHERE postid = '$pid'");
											}
										}
									else{
										if (empty($postID)) {
											echo "<h1>ERROR 404: SEEMS WE DON'T HAVE WHAT YOU ARE LOOKING FOR HERE.</h1>";
											die();
										}
										else{
											echo "<h1>ERROR 404: SEEMS WE DON T HAVE WHAT YOU ARE LOOKING FOR HERE.</h1>";
											die();
										}
									}
								?>
							</div>
							<!--<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="#"><h4>Space The Final Frontier</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="#"><h4>Telescopes 101</h4></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
										</div>										
									</div>									
								</div>
							</div>-->
							<div class="comments-area">
								<?php
									$query = "SELECT * FROM comments";
									$query_run = mysqli_query($db, $query);
									$query_num_rows = mysqli_num_rows($query_run);
								?>
								<h4><?php echo $query_num_rows; ?> Comment(s)</h4>
								<?php
									$r = mysqli_query($db, "SELECT * FROM comments WHERE sluggedTitle='$postID' ORDER BY commentTime DESC");

									while ($row = mysqli_fetch_array($r)) {
										$commnt_id = $row['commentid'];
										$comntr = $row['visitor'];
										$comnt = $row['comment'];
										$comdate = $row['commentDate'];
										$comtime = $row['commentTime'];
										$postId = $row['postid'];
										$postID = $row['sluggedTitle'];

										echo '<div class="comment-list">
												<div class="single-comment justify-content-between d-flex">
													<div class="user justify-content-between d-flex">
														<div class="thumb">
															<span class="lnr lnr-user" style="font-size:50px;"></span>
														</div>
														<div class="desc">
															<h5>'.$comntr.'</h5>
															<p class="date">'.$comdate.' at '.$comtime.'</p>
															<p class="comment">'.$comnt.'</p>
														</div>
													</div>
													<div class="reply-btn">
														<button type="button" class="btn-reply text-uppercase" data-toggle="collapse" data-target="#demo'.$commnt_id.'">reply</button> 
													</div>
												</div>
											</div>';
                                    	// Reply codes
                                    /*echo '<div id="demo'.$commnt_id.'" class="comment-form collapse in">
                                    	<form method="POST" id="reply-form">
											<input type="hidden" name="cid" id="cid" value="'.$commnt_id.'">
											<input type="hidden" name="post_id" id="post_id" value="'.$postId.'">
											<input type="hidden" name="sl_id" id="sl_id" value="'.$postID.'">
											<div class="form-group form-inline">
											  <div class="form-group col-lg-6 col-md-12 name">
											    <input type="text" name="rname" class="form-control" id="rname" placeholder="Enter Name" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Name\'" required="">
											  </div>
											  <div class="form-group col-lg-6 col-md-12 email">
											    <input type="email" name="remail" class="form-control" id="remail" placeholder="Enter email address" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter email address\'" required="">
											  </div>										
											</div>
											<div class="form-group">
												<textarea class="form-control mb-10" rows="5" name="rmessage" id="rmessage" placeholder="Enter Comment" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Reply\'" required=""></textarea>
											</div>
											<input type="submit" name="submit" id="'.$commnt_id.'" value="Reply This Comment" class="primary-btn text-uppercase"/>	
										</form>
                                	</div>';

                                	$res = mysqli_query($db, "SELECT * FROM replies WHERE sluggedTitle='$postID' AND commentid='$commnt_id' ORDER BY replyid ASC");

                                	while ($sql_row = mysqli_fetch_array($res)) {
                                		$reply_id =$sql_row['replyid'];
                                		$commnt_id = $sql_row['commentid'];
										$replier = $sql_row['replier'];
										$reply = $sql_row['reply'];
										$redate = $sql_row['replyDate'];
										$retime = $sql_row['replyTime'];
										$postId = $sql_row['postid'];
										$postID = $sql_row['sluggedTitle'];

										echo '<div class="comment-list left-padding">
	                                    <div class="single-comment justify-content-between d-flex">
	                                        <div class="user justify-content-between d-flex">
	                                            <div class="thumb">
	                                                <span class="lnr lnr-user" style="font-size:50px;"></span>
	                                            </div>
	                                            <div class="desc">
	                                                <h5>'.$replier.'</h5>
	                                                <p class="date">'.$redate.' at '.$retime.' </p>
	                                                <p class="comment">'.$reply.'</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>';
                                	}*/
									}
								?>
									<!--<div class="comment-list left-padding">
	                                    <div class="single-comment justify-content-between d-flex">
	                                        <div class="user justify-content-between d-flex">
	                                            <div class="thumb">
	                                                <img src="img/blog/c2.jpg" alt="">
	                                            </div>
	                                            <div class="desc">
	                                                <h5><a href="#">Elsie Cunningham</a></h5>
	                                                <p class="date">December 4, 2017 at 3:12 pm </p>
	                                                <p class="comment">
	                                                    Never say goodbye till the end comes!
	                                                </p>
	                                            </div>
	                                        </div>
	                                        <div class="reply-btn">
	                                               <a href="" class="btn-reply text-uppercase">reply</a> 
	                                        </div>
	                                    </div>
	                                </div>-->
	                                <?php
									 /*echo '<div class="comment-list">
										<div id="demo'.$commnt_id.'" class="comment-form collapse in">
                                    	<form method="POST" id="reply-form">
											<input type="text" name="cid" id="cid" value="'.$commnt_id.'">
											<input type="hidden" name="post_id" id="post_id" value="'.$postId.'">
											<input type="hidden" name="sl_id" id="sl_id" value="'.$postID.'">
											<div class="form-group form-inline">
											  <div class="form-group col-lg-6 col-md-12 name">
											    <input type="text" name="rname" class="form-control" id="rname" placeholder="Enter Name" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Name\'" required="" autofocus="">
											  </div>
											  <div class="form-group col-lg-6 col-md-12 email">
											    <input type="email" name="remail" class="form-control" id="remail" placeholder="Enter email address" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter email address\'" required="">
											  </div>										
											</div>
											<div class="form-group">
												<textarea class="form-control mb-10" rows="5" name="rmessage" id="rmessage" placeholder="Enter Comment" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Reply\'" required=""></textarea>
											</div>
											<input type="submit" name="submit" id="submit" value="Reply This Comment" class="primary-btn text-uppercase reply"/>	
										</form>
                                    	</div>';*/
                                    	?>
	                                    <!--<div class="single-comment justify-content-between d-flex">
	                                        <div class="user justify-content-between d-flex">
	                                            <div class="thumb">
	                                                <img src="img/blog/avatar1.jpg" alt="">
	                                            </div>
	                                            <div class="desc">
	                                                <h5><a href="#">Emilly Blunt</a></h5>
	                                                <p class="date">December 4, 2017 at 3:12 pm </p>
	                                                <p class="comment">
	                                                    Never say goodbye till the end comes!
	                                                </p>
	                                            </div>
	                                        </div>
	                                        <div class="reply-btn repli">
	                                               <button type="button" class="btn-reply text-uppercase" data-toggle="collapse" data-target="#demo">reply</button> 
	                                        </div>
	                                    </div>
	                                        <div id="demo" class="collapse in">
	                                        	Our team of professionals render annual audit services to our esteemed clients. Thereby helping them not to pay interests and penalties.
	                                        </div>-->
	                                <!--</div>-->
									<!--<div class="comment-list left-padding">
	                                    <div class="single-comment justify-content-between d-flex">
	                                        <div class="user justify-content-between d-flex">
	                                            <div class="thumb">
	                                                <img src="img/blog/c2.jpg" alt="">
	                                            </div>
	                                            <div class="desc">
	                                                <h5><a href="#">Elsie Cunningham</a></h5>
	                                                <p class="date">December 4, 2017 at 3:12 pm </p>
	                                                <p class="comment">
	                                                    Never say goodbye till the end comes!
	                                                </p>
	                                            </div>
	                                        </div>
	                                        <div class="reply-btn">
	                                               <a href="" class="btn-reply text-uppercase">reply</a> 
	                                        </div>
	                                    </div>
	                                </div>-->
                                	                                             				
							</div>
							<div class="comment-form">
								<h4>Leave a Comment</h4>
								<?php
									if (isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['message'])) {
										$fullname = $_POST['name'];
										$email = $_POST['email'];
										$comnt = $_POST['message'];
										$pid = $_POST['pid'];
										$sid = $_POST['sid'];
										$ctime = date("g:ia", strtotime("+1 hour"));
										$cdate = date("F j, Y", strtotime("+1 hour"));

										if (!empty($fullname)&& !empty($email)&& !empty($comnt)) {
											$sql_query = mysqli_query($db, "INSERT INTO comments (visitor, eMail, comment, commentDate, commentTime, postid, sluggedTitle) VALUES ('".mysqli_real_escape_string($db, $fullname)."','".mysqli_real_escape_string($db, $email)."','".mysqli_real_escape_string($db, $comnt)."','$cdate','$ctime','$pid','$sid')");

											if ($sql_query) {
												echo '<p style="color:green;">Thanks for sharing your comment.</p>';
											}
											else{
												echo '<p style="color:red;">An error occurred. Try again.</p>';
											}
										}
										else{
											echo '<p style="color:red;">All fields are required to be filled.</p>';
										}
									}
								?>
								<form method="POST" action="post.php?p=<?php echo $postID; ?>">
									<input type="hidden" name="pid" value="<?php echo $pid; ?>">
									<input type="hidden" name="sid" value="<?php echo $postID; ?>">
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" required="">
									  </div>
									  <div class="form-group col-lg-6 col-md-12 email">
									    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="">
									  </div>										
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Enter Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Comment'" required=""></textarea>
									</div>
									<input type="submit" name="submit" value="Post Comment" class="primary-btn text-uppercase"/>	
								</form>
							</div>
						</div>
						<div class="col-md-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<!--<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>-->
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
										<?php
										$res = mysqli_query($db, "SELECT * FROM posts ORDER BY views DESC LIMIT 5 ");

										if($res){
											while($row = mysqli_fetch_array($res)){
												$pID = $row["postid"];
												$slugg = $row["sluggedTitle"];
												$featimg = $row["featimage"];
												$postTITLE = $row["posttitle"];
												$TandD = $row["postdate"];

												echo '<div class="single-post-list d-flex flex-row align-items-center">
													<div class="thumb">
														<img src="../img/blog/'.$featimg.'" alt="'.$postTITLE.'" width="20" height="50">
													</div>
													<div class="details">
														<a class="posts-title" href="post.php?p='.$slugg.'"><h6 style="text-transform:capitalize;">'.$postTITLE.'</h6></a>
														<p>'.$TandD.'</p>
													</div>
												</div>';
											}
										}
										
										?>															
									</div>
								</div>							
							</div>
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
                                    <a href="https://www.linkedin.com/in/joseph-emeruwa"><i class="fa fa-linkedin"></i></a>
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
			<script type="text/javascript">
				$(document).ready(function(){
					$("#submit").click(function(){
						/*console.log(this.id)
						$(document).on('click', '.reply', function(){
						var commnt_id = $(this).attr("id");*/
						var rname = $("#rname").val();
						var remail = $("#remail").val();
						var rmessage = $("#rmessage").val();
						var cid = $("#cid").val();
						var post_id = $("#post_id").val();
						var sl_id = $("#sl_id").val();
						//Returns successful data submission message when the entered information is stored in database
						var dataString = 'name1='+ rname + '&email1='+ remail + '&message1='+ rmessage + '&cid1='+ cid + '&post_id1='+ post_id + '&sl_id1='+ sl_id;
						if(rname=='' ||remail=='' ||rmessage==''){
							alert("Please Fill All Fields");
						}
						else{
							//AJAX Code to submit form
							$.ajax({
								type: "POST",
								url: "replysubmit.php",
								data: dataString,
								cache: false,
								success: function(result){
									alert(result);
								}
							});
						}
						return false;
					});
				});
			</script>
		</body>
	</html>