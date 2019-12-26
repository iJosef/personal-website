<?php
include("sessionstart.php");
?>
<?php
include("conn/db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blank Page - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-send"></i> Posts     <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="post.php">All Posts</a></li>
                <li><a href="addpost.php">Add New</a></li>
              </ul>
            </li>
            <li><a href="comments.php"><i class="glyphicon glyphicon-comment"></i> Comments</a></li>
            <li><a href="categories.php"><i class="fa fa-folder-o"></i> Categories</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-picture"></i> Portfolio     <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio.php">All Portfolios</a></li>
                <li><a href="addportfolio.php">Add New</a></li>
              </ul>
            </li>
            <li><a href="changepassword.php"><i class="fa fa-wrench"></i> Change Password</a></li>
            <li><a href="addnewuser.php"><i class="fa fa-user-plus"></i> Add New User</a></li>
            <!--<li class="active"><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li>-->
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>-->
                <li class="divider"></li>
                <li><a href="sessionend.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Change Password</h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Change password</li>
            </ol>
            <h5>Fill in the fields to change your admin password.</h5>
            <?php
            if(isset($_POST['opassword'])&&isset($_POST['password'])&&isset($_POST['cpassword'])){
              $opass = $_POST['opassword'];
              $pass = $_POST['password'];
              $cpass = $_POST['cpassword'];
              $hapass = md5($opass);
              $hpass = md5($pass);

              $user = $currentuser_session;

              $res = mysqli_query($db, "SELECT * FROM users WHERE username = '$user'");
              while ($row = mysqli_fetch_array($res)) {
                $p = $row['password'];
                $uid = $row['userid'];
              }

              if (!empty($opass)&&!empty($pass)&&!empty($cpass)) {
                if ($p == $hapass) {
                  if ($pass == $cpass) {
                    $setpass = mysqli_query($db, "UPDATE users SET password = '".mysqli_real_escape_string($hpass)."' WHERE username = '$user'");
                    if ($setpass) {
                      echo '<p style="color:green;">Password Changed Successfully!!</p>';
                    }
                    else{
                      echo '<p style="color:red;">An error occurred. Try again.</p>';
                    }
                  }
                  else{
                    echo '<p style="color:red;">Passwords don\'t match.</p>';
                  }
                }
                else{
                  echo '<p style="color:red;">Incorrect Password.</p>';
                }
              }
              else{
                echo '<p style="color:red;">All fields are required.</p>';
              }
            }
            ?>
            <form action="changepassword.php" method="post" id="login" onsubmit="return validateLogin()">
                <div class="form-group">
                    <label for="opassword">Current Password*</label>
                    <input type="password" name="opassword" class="form-control" id="opassword" placeholder="Please enter current password"/>
                </div>
                <div class="form-group">
                    <label for="password">New Password*</label>
                    <input type="password" name="password" class="form-control" id="password" maxlength="10" minlength="6" placeholder="Please enter password"/>
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password*</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword" maxlength="10" minlength="6" placeholder="Please confirm password"/>
                </div>
                <div class="form-group">                                        
                    <input type="submit" name="login" class="btn btn-primary" id="submit" value="Change Password" style="width:150px; font-weight:bold;"/>
                </div>
            </form>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>