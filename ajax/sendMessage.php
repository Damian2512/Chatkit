<?php
include '../config.php';

if (isset($_POST)) {
	$from = auth()->id;
	$to = $_POST['to'];
	$message = $_POST['message'];

	mysqli_query($con, "INSERT INTO `chat`(`from`,`to`,`message`) VALUES ('".$from."','".$to."','".$message."')");

}
