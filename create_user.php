<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		//validate data
		include 'includes/validator.php';
		

		$valConf  =  array(
			'firstname' => 'required',
			'lastname' => 'required',
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		);

		$errors  = validate($valConf,$_POST);


		if(count($errors) > 0){
			$_SESSION['reg_err']  = $errors;
			$_SESSION['reg_form_data']  = array(
				'firstname' => isset($_POST['firstname'])? $_POST['firstname']:"",
				'lastname' => isset($_POST['lastname'])? $_POST['lastname']:"",
				'username' => isset($_POST['username'])? $_POST['username']:"",
				'email' => isset($_POST['email'])? $_POST['email']:""
			);
			header("Location: register.php");
		}
		//end of validation
		

		$fname   = $_POST['firstname'];
		$lname   = $_POST['lastname'];
		$username  = $_POST['username'];
		$email  = $_POST['email'];
		$password  = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash your password 


		include 'includes/db.php';	
		$con   = getConnection();
		$query  = "INSERT INTO users_t(fname,lname,username,email,password) 
		VALUES(:fname,:lname,:username,:email,:password)";
		$stmt  = $con->prepare($query);

		$stmt->bindParam(':fname',$fname);
		$stmt->bindParam(':lname',$lname);
		$stmt->bindParam(':username',$username);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':password',$password);

		$stmt->execute();
		$inserted  = $stmt->rowCount();

		if($inserted){
			$_SESSION['isloggedin']    = true;
			$_SESSION['username']  =  $username;
			header('Location: dashboard.php');
		}
		else {
			echo "An error occured. Please try again!";
		}
		


	}


?>