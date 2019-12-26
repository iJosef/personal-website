<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM posts WHERE postid = '$id' ";
	mysqli_query($db, "$sql");
}

header("location: posts.php");
?>