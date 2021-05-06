<?php
	
	function sessionGuard($url){
		if(!isset($_SESSION['isloggedin'])){
			header('Location: '   . $url);
		}
	}


?>