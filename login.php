<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/box-model.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="flex-container" style="margin-top: 50px;">
		<img src="images/logo.png" id="login-logo">
	</div>
	<div class="flex-container">
		<form style="width: 318px;" method="post">
			<div class="form-box">
				<label>Username:&nbsp; </label><br>
				<input type="text" name="username" class="form-input">
			</div>
			<div class="form-box">
				<label>Password:&nbsp;</label><br>
				<input type="password" name="password"  class="form-input">
			</div>
			<div class="form-box">
				<input type="checkbox" name="remember" >
				<label>Remember Me</label>
			</div>
			<input type="submit" name="submit" value="Login" id="login-btn">
		</form>
	</div>
	<div class="flex-container">
		<p>No account? <a href="register.php" target="_blank">Click here to Register</a></p>
	</div>
</body>
</html>