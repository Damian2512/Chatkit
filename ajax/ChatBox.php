<?php
include '../config.php';
if (isset($_GET['id'])) {
	addChat($_GET['id']);

	echo showChatBox($_GET['id'],'../');
}
if (isset($_GET['remove'])) {
	removeChat($_GET['remove']);
	foreach(activeChats() as $id){
		echo showChatBox($id, '../');
	}
}
?>


<!--gebleven bij start
https://www.youtube.com/watch?v=Rmn9-vTx6d8&list=PL5QMKjKY4bJoYNMIIE25o2gof2B2BFjHC&index=5


-->
