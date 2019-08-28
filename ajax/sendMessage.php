<?php
include '../config.php';

require '../php/Pusher.php';


if (isset($_POST)) {

	$pusher = new Pusher(
		'auth_key',
		'secret',
		'api_id'
	);
	$from = auth()->id;
	$to = $_POST['to'];
	$message = $_POST['message'];
$alert = $from == auth()->id ? 'alert-info' : 'alert-success';

	$data['message'] = $message;
	$data['to'] = $to;
	$data['from'] = $from;
	$data['alert'] = $alert;
	$pusher->trigger('chat', 'my-event', $data);

	mysqli_query($con, "INSERT INTO `chat`(`from`,`to`,`message`) VALUES ('".$from."','".$to."','".$message."')");

}
