<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM portfolio WHERE portfolioid = '$id' ";
	mysqli_query($db, "$sql");
}

header("location: portfolio.php");
?>