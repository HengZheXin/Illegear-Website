<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration | IGS Website</title>
	<link rel="shortcut icon" href="images/illegear-logo2.png" type="image/x-icon">
	<?php require_once '../ShareDesign/header2.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Security Code</label>
			<input type="text" name="scode" value="<?php echo $scode; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already an admin? <a href="login.php">Sign in</a>
		</p>
	</form>

	<div class="register-gif">
		<img src="images/acc3.gif" style=" margin-left: 20px; margin-top: -750px; width:50%;">
	</div>
</body>
<?php require_once '../ShareDesign/footer.php'; ?>

</html>