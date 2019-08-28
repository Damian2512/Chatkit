<!--https://www.youtube.com/watch?v=Z9dHTXyuBYk&list=PL5QMKjKY4bJoYNMIIE25o2gof2B2BFjHC&index=7
-->


<?php
include 'config.php';

if (!isset($_SESSION['name'])) {
	header('location:login.php');
	die();
}
//unset($_SESSION['chats']);
?>
<!DOCTYPE html>
<html lang="" auth="<?php echo auth()->id;?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title page</title>

	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css"
		  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"
		  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 sidebar">

			<?php
			$query = mysqli_query($con, "SELECT * FROM `users` WHERE `name` != '" . $_SESSION['name'] . "'");
			?>
			<ul>
				<?php
				while ($row = mysqli_fetch_array($query)) { ?>
					<li><a href="javascript:;" class="sidebar-user"
						   user-id="<?= $row['id']; ?>"><?= $row['name']; ?></a></li>
				<?php } ?>
			</ul>

		</div>
		<div class="col-md-10">
			<div class="row chat-container">

				<?php
				foreach (activeChats() as $id) {
					echo showChatBox($id);
				}
				?>
			</div>

		</div>
	</div>
</div>


<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Bootstrap JavaScript-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--IE10 viewport hack for surface/desktop windows 8 bug-->
<script src="js/script.js"></script>
<script src="js/my_pusher.js"></script>
</body>
</html>