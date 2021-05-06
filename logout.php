<?php

	session_start();

	if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true ){
		unset($_SESSION['isloggedin']);
		unset($_SESSION['username']);
		header('Location: login.php');
	}

?>