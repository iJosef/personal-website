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
          <a class="navbar-brand" href="dashboard.php">SB Admin</a>
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
            <h1>All Posts</h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> All Posts</li>
            </ol>
            <p><a href="addpost.php" class="btn btn-default">Add New Post</a></p>
            <div class="col-lg-6">
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</i></th>
                    <th>Date </th>
                    <th>Featured Image </th>
                    <th>Views </th>
                    <th>Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    //define how many results per page
                    $results_per_page = 10;  

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
                    $sql="SELECT * FROM posts ORDER BY postid DESC LIMIT " .$this_page_first_result.','.$results_per_page;
                    $r = mysqli_query($db, $sql);

                    if($r){
                      while ($row = mysqli_fetch_array($r)) {
                        echo "<tr>";
                        echo '<td>'.$row['postid'].'</td>';
                        echo '<td><a href="editpost.php?id='.$row['postid'].'">'.$row['posttitle'].'</a></td>';
                        echo '<td>'.$row['postdate'].'</td>';
                        echo '<td align="center"><img src="../img/blog/'.$row['featimage'].'" height=40 width=40/></td>';
                        echo '<td align="center">'.$row['views'].'</td>';
                        echo '<td><a href="editpost.php?id='.$row['postid'].'">&nbsp;&nbsp;&nbsp;<span class="fa fa-pencil" style="color:black; text-align:center;"></span></a><br/><a href="deletepost.php?id='.$row['postid'].'">&nbsp;&nbsp;&nbsp;<span class="fa fa-trash-o" style="color:#f9341e; text-align:center;"></span></a></td>';
                        echo "</tr>";
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-sm-11 col-sm-push-1" style="margin-top:15px;">
            <?php
             // echo "<b>Page: </b>";
              echo '<ul class="pagination">
                        <li><a href="#">&laquo;</a></li>';
              //display the links to the pages
              for ($page=1; $page<=$num_of_pages; $page++) { 
                 //echo '<span><a href="research-papers.php?page='.$page.'" style="border:solid 1px;padding:5px;margin:5px;background-color:skyblue;color:white;"><b>'.$page.'   </b></a></span>';
                 
                  echo '<li><a href="post.php?page='.$page.'">'.$page.'   </a></li>';
                  
                }
                echo '<li><a href="#">&raquo;</a></li>
                      </ul>';
            ?>
          </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>