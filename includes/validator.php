<?php

	function required($str){
		if( !(strlen($str) > 0))
			return "This field is required";
		return null;

	}

	function email($str){
		if(!filter_var($str,FILTER_VALIDATE_EMAIL))
			return "Invalid Email";
		return null;
	}

	function validate($config,$data){
		$errors  = array();

		foreach($config as $key => $val){
			$rules  = explode('|',$val);
			foreach($rules as $rule){
				if(!isset($errors[$key])){
					$result   = call_user_func($rule,$data[$key]);
					if($result !=null){
						$errors[$key]  = $result;
					}
				}
				else{
					break;
				}
			}
		}
		return $errors;
	}

?>