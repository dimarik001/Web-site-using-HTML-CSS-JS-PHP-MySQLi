<?php
	if (isset($_GET['action'])){
		if($_GET['action'] == 'logout'){
			session_destroy();
			unset($_SESSION['username']);
			header("location: homepage.php");
		}
	}
?>