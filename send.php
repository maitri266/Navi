<?php

	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];
		// $sub = $_POST['subject'];

		mail("jash.gopani@somaiya.edu","sub",$msg);
	}

	function test_input($data) {
	  $data = trim($data);
	  // $data = stripslashes($data);
	  // $data = htmlspecialchars($data);
	  return $data;
	}
?>