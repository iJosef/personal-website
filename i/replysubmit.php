<?php
	include("conn/db.php");

	//fetching values from url
	$name2 = $_POST['name1'];
	$email2 = $_POST['email1'];
	$message2 = $_POST['message1'];
	$cid2 = $_POST['cid1'];
	$post_id2 = $_POST['post_id1'];
	$sl_id2 = $_POST['sl_id1'];
	$rtime = date("g:ia", strtotime("+1 hour"));
	$rdate = date("F j, Y", strtotime("+1 hour"));

	//insert query
	$sql_query = mysqli_query($db, "INSERT INTO replies (replier, emaiL, reply, replyDate, replyTime, commentid, postid, sluggedTitle) VALUES ('".mysqli_real_escape_string($db, $name2)."','".mysqli_real_escape_string($db, $email2)."','".mysqli_real_escape_string($db, $message2)."','$rdate','$rtime','$cid2','$post_id2', '$sl_id2')");
	echo "Thanks for sharing your comment. Your comment will appear once it is Approved";
?>