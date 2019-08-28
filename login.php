<?php
include 'config.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];

	$sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `name` = '" . $name . "'");
	if (mysqli_num_rows($sql) > 0) {

		$user = mysqli_fetch_array($sql);
		$_SESSION['name'] = $user['name'];
		header('location:index.php');
	} else {
		die('<center><h1>Error : Not Login</h1></center>');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<link rel="stylesheet" type="text/css"
		  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<form action="" method="post" role="form">
		<legend>Form Title</legend>

		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" id="" placeholder="Name">
		</div>

		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>

</div>
</body>
</html>