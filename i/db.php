<?php
$mysqli_host="localhost";
$mysqli_user="root";
$mysqli_pass="";
$mysqli_db="jcodebox";

$db =@mysqli_connect($mysqli_host,$mysqli_user,$mysqli_pass) or die("Could not connect to database");

@mysqli_select_db($db, $mysqli_db) or die("Could not select database");
?>