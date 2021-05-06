<?php
	
	function displayError($errors, $key){
		if(isset($errors[$key]))
			echo '<small style="color: red">* '   .  $errors[$key]  .  '</small>'; 
	}

	function retype($formData,$key){
		if(isset($formData[$key]))
			return $formData[$key];
		return "";
	}

	function getSavedUser(){
		if(isset($_COOKIE['username']))
			return $_COOKIE['username'];
		return null;
	}
?>