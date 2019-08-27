<?php
include '../config.php';
if (isset($_GET['id'])) {
	addChat($_GET['id']);
	echo showChatBox($_GET['id']);
	}
// https://www.youtube.com/watch?v=mVz4ddEgLVI&list=PL5QMKjKY4bJoYNMIIE25o2gof2B2BFjHC&index=4

//gebleven op 20:50
?>