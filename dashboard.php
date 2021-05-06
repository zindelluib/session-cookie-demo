<?php session_start() ?>
<?php 
	include 'includes/sessionhelper.php';
	sessionGuard('http://localhost/session-cookie-demo/login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">Logout</a>
</body>
</html>