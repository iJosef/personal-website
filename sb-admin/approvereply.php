<?php
include("db.php");

if($_GET['id']){
	$id=$_GET['id'];

	$sql="SELECT * FROM replies WHERE replyid='$id'";
	$sql_run= mysqli_query($db, $sql);
	$fetch_result = mysqli_fetch_array($sql_run);
	$approved = $fetch_result['approval'];

	if($approved==0){
		$sql_update = mysqli_query($db, "UPDATE replies SET approval = $app+1 WHERE replyid='$id'");
		if($sql_update){
			if(isset($_GET['page'])){
				$page = $_GET['page'];

				header("location: categories.php?page='$page'");
			}
			else{
				header("location: categories.php");
			}
		}
		else{
			echo '<script language="javascript" type="text/javascript">alert("An Error Occured. Try again.");</script>';
			echo '<script language="javascript" type="text/javascript">window.location="categories.php";</script>';

			exit;
		}
	}
	else{
		if(isset($_GET['page'])){
				$page = $_GET['page'];

				header("location: categories.php?page='$page'");
			}
			else{
				header("location: categories.php");
			}
	}
}
?>