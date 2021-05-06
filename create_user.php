<?php
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		//validate data
		$fname   = $_POST['firstname'];
		$lname   = $_POST['lastname'];
		$username  = $_POST['username'];
		$email  = $_POST['email'];
		$password  = $_POST['password']; // hash your password 

	
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
			echo "Registration Successful";
		}
		else {
			echo "An error occured. Please try again!";
		}



	}


?>