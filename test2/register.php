<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration | IGS Website</title>
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
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

  	<div class="register-gif">
        <img src="images/register.png" style="position: absolute; margin-left: 900px; margin-top: -550px" width="30%">
    </div>
</body>
<?php require_once '../ShareDesign/footer.php'; ?>
</html>