<?php
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username   = $_POST['username'];
		

		//TODO create login script

		if(isset($_POST['remember'])){
			$expires  = time() + (60 * 60 * 24 * 30);
			setcookie("username",$username,$expires); 
		}
		//Lets assume
		$_SESSION['isloggedin']  = true;
		$_SESSION['username']   = $username;
		header('Location: dashboard.php');
	}

?>