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

    <!-- Tinymce -->
    <script type="text/javascript" src='tinymce\js\tinymce\tinymce.min.js'></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
  images_upload_url: 'upload.php',
    images_upload_handler: function(blobInfo, success, failure) {
      var xhr, formData,

      xhr = new XMLHttpRequest();
      xhr.withCredentials = false;
      xhr.open('POST','upload.php');

      xhr.onload = function() {
        var json;

        if (xhr.status != 200){
          failure ('HTTP Error: ' + xhr.status);
          return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
          failure ('invalid JSON: ' + xhr.responseText);
          return;
        }

        success(json.location);
        
      }

      formData = new FormData();
      formData.append ('file', blobInfo.blob(), blobInfo.filename());

      xhr.send(formData);
    }
  });
  </script>
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
            <h1>Edit Post</h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Edit Post</li>
            </ol>
            <?php
              $id = $_GET['id'];

              $res = mysqli_query($db, "SELECT * FROM posts where postid = '$id'");
              while ($row = mysqli_fetch_array($res)){
                $title = $row['posttitle'];
                $post = $row['blogPost'];
                $slugT = $row['sluggedTitle'];
              }
            ?>
            <?php
            if(isset($_POST['title'])&& isset($_POST['post'])){

              function create_url_slug($title){
                $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
                return $slug;
              }

              $title = strtolower($_POST['title']);
              $id = $_POST['id'];
              $slugged = create_url_slug($title);
              $post = $_POST['post'];
              $time = date("j F, Y", strtotime ("+1 hour"));

              if (!empty($title)&& !empty($post)) {
                $query = "UPDATE posts SET posttitle='".mysqli_real_escape_string($title)."', blogPost='".mysqli_real_escape_string($post)."', sluggedTitle='$slugged', postdate='$time' WHERE postid='$id'";

                $query_update = mysqli_query($db, $query);
                if ($query_update = TRUE) {
                  header("location:post.php");  
                  }
                  else{
                    echo '<p style="color:red;">An error occurred. Try again.</p>';
                    echo mysqli_error();
                  }  
                }
              }
              /*if(isset($file)){
                if(!empty($file)){
                  if(($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') && ($type == 'image/jpeg' || $type == 'image/png')&&($size <= $max_size)){
                    $loc = '../img/blog/';

                    if(move_uploaded_file($tmp, $loc.$file)){
                      $sql = mysqli_query($db, "INSERT INTO posts (posttitle, featimage, blogPost, sluggedTitle, postdate)
                        VALUES ('".mysqli_real_escape_string($title)."','$file','".mysqli_real_escape_string($post)."', '$slugged','$time')");


                      if($sql){
                      echo '<p style="color:green;">Post Updated Successfully</p>';  
                      }
                      else{
                        echo '<p style="color:red;">An error occurred. Try again.</p>';
                        echo mysqli_error();
                      }   
                    }
                    else{
                      echo '<p style="color:red;">An error occurred. Try again.</p>';
                    }
                  }
                  else{
                    echo '<p style="color:red;">File must be JPEG, JPG or PNG and BELOW 2MB. </p>';
                  }
                }
                else{
                  echo '<p style="color:red;">All fields are required.</p>';
                }
              }
            }*/
            ?>
            <form action="editpost.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title"  value="<?php echo $title; ?>" style="width:400px;"/>
            </div>
            <!--<div class="form-group">
              <label for="file">Featured Image</label>
              <input type="file" name="file" id="file" value="<?php echo $fimg; ?>" />
            </div>-->
            <div class="form-group">
              <label for="myTextarea">Add Post</label>
              <!--<textarea name="message" class="form-control" id="post" style="min-height: 350px;"></textarea>-->
              <textarea name="post" id="myTextarea"><?php echo $post; ?></textarea>
            </div>
            <div class="form-group">                    
              <input type="submit" name="msg" class="btn btn-primary" id="submit" value="UPDATE" style="width:120px;"/>
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