<?php
	var_dump(isset($POST['submit']));
	var_dump(isset($POST['Send Now']));
	if (isset($POST['submit'])) {
	  $name = test_input($_POST["name"]);
	  $email = test_input($_POST["email"]);
	  $message = test_input($_POST["message"]);
	  $message = wordwrap($message,7);
	  // echo mail("jash.gopani@somaiya.edu","My subject",$message);
	  echo $name."<br>".$email."<br>".$message;
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>