<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create an Account</title>
	<link rel="stylesheet" type="text/css" href="css/box-model.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="flex-container" style="margin-top: 50px;">
		<img src="images/logo.png" id="login-logo">
	</div>
	<div class="flex-container">
		<form action="create_user.php" style="width: 318px;" method="post">
			<div class="form-box">
				<label>First Name:&nbsp; </label><br>
				<input type="text" name="firstname" class="form-input">
			</div>
			<div class="form-box">
				<label>Last Name:&nbsp; </label><br>
				<input type="text" name="lastname" class="form-input">
			</div>
			<div class="form-box">
				<label>Username:&nbsp; </label><br>
				<input type="text" name="username" class="form-input">
			</div>
			<div class="form-box">
				<label>Email:&nbsp; </label><br>
				<input type="email" name="email" class="form-input">
			</div>
			<div class="form-box">
				<label>Password:&nbsp; </label><br>
				<input type="password" name="password" class="form-input">
			</div>
			<div class="form-box">
				<small>By clicking "Register" , you agree to our <a href="#">Terms and Data Policy</a></small>
			</div>
			<input type="submit" name="submit" value="Register" id="register-btn">

		</form>
	</div>

</body>
</html>