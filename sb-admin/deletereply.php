<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM replies WHERE replyid = '$id' ";
	mysqli_query($db, "$sql");
}

header("location: categories.php");
?>