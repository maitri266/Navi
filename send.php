<?php

	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];
		$sub = $_POST['subject'];
		$msg = wordwrap($msg);
		$link = "mailto:snb.navi@gmail.com?Subject".$sub."&Body=".$msg;
		header("Location:".$link);
		die();
	}

	function test_input($data) {
	  $data = trim($data);
	  // $data = stripslashes($data);
	  // $data = htmlspecialchars($data);
	  return $data;
	}
?>