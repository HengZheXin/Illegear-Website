<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | IGS Website</title>
  <?php require_once '../ShareDesign/header2.php'; ?>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  		</p>
	  <br>
	<a class="forgot_pwd" href="../password-recovery/enter_email.php"><p>Forget Your Password? </p></a>
  </form>
	<br><br><br><br><br>
  	<div class="login-gif">
	  <img src="images/acc3.gif" style=" margin-left: 20px; margin-top: -750px; width:50%;">
    </div>
</body>
<?php require_once '../ShareDesign/footer.php'; ?>
</html>