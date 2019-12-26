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
          <a class="navbar-brand" href="index.php">SB Admin</a>
        </div>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <div class="col-sm-6 col-sm-push-3">
                    <?php

                    if(isset($_POST['username'])&&isset($_POST['password'])){
                        $un = $_POST['username'];
                        $pass = $_POST['password'];
                        $pass_hash =md5($pass);

                        if(!empty($un)&&!empty($pass)){
                            $login = mysqli_query($db, "SELECT * FROM users WHERE username = '".mysqli_real_escape_string($db, $un)."' and password = '".mysqli_real_escape_string($db, $pass_hash)."'");

                           

                            if($login){
                                $count = mysqli_num_rows($login);
                                $row = mysqli_fetch_array($login);

                                if($count == 1){
                                    session_start();
                                    $_SESSION['user'] = $row['username'];
                                    header("location:dashboard.php");
                                }
                                else{
                                   echo '<p style="color:red;">Invalid Username or Password.</p>'; 
                                }
                            }
                            else{
                                   echo '<p style="color:red;">An error occurred. Please try again later.</p>'; 
                                }
                        }
                        else{
                            echo '<p style="color:red;">All fields are required.</p>';
                        }
                    }
                    ?>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3><span class="fa fa-user" style="font-size: 70px; color:gray;"></span>&nbsp;&nbsp;Admin Login</h3>
                        </div>
                        <div class="panel-body">    
                            <form action="index.php" method="post" id="login" onsubmit="return validateLogin()">
                                <div class="form-group">
                                    <label for="username">Username*</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Please enter username"/>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password*</label>
                                    <input type="password" name="password" class="form-control" id="password" maxlength="10" minlength="6" placeholder="Please enter password"/>
                                </div>
                                <div class="form-group">                                        
                                    <input type="submit" name="login" class="btn btn-primary" id="submit" value="LOGIN" style="width:150px; font-weight:bold;"/>
                                </div>
                            </form>
                        </div>

         </div> 
      </div>
    </div>

          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>