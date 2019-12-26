<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM comments WHERE commentid = '$id' ";
	mysqli_query($db, "$sql");
}

header("location: comments.php");
?>