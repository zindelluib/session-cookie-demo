<?php
	define('CONN_STR','mysql:host=localhost;dbname=dbdemo');
	define('USERNAME','root');
	define('PASSWORD','');


	function getConnection(){
		try{
			$con   = new PDO(CONN_STR,USERNAME,PASSWORD);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $con;
		}catch(PDOException $e){
			exit;
		}

	}


?>