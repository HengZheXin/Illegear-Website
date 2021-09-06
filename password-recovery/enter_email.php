<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Reset Password | IGS Website</title>
	<link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<?php

	$errors = array();
	global $email;
	$id = "";
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'igswebdb');

	//Accept email of user whose password is to be reset
	if (isset($_POST['reset-password'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);
		// ensure that the user exists on our system
		$query = "SELECT email FROM users WHERE email='$email'";
		$results = mysqli_query($db, $query);

		$new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
		$new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
		if (($new_pass == "") || $new_pass_c == "") $errors['e2'] = "Password is required";
		else if ($new_pass != $new_pass_c) $errors['e2'] = "Password do not match";

		if ($email == "") {
			$errors['e1'] = "Your email is required";
		} else if (mysqli_num_rows($results) <= 0) {
			$errors['e1'] = "Sorry, no user exists on our system with that email";
		} else if (mysqli_num_rows($results) == 1) {
			// ENTER A NEW PASSWORD
			if (empty($errors['e2'])) {
				// select email address of user from the users table 
				$sql = "SELECT email FROM users  WHERE email='$email'";
				$results = mysqli_query($db, $sql);
				$email = mysqli_fetch_assoc($results)['email'];
				if (isset($email)) {
					$sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
					$results = mysqli_query($db, $sql);
					echo '<div class="success">
							<p>>>  Reset Password Successful!  <<</p>
							</div>';
				}
			}
		}
	}
	?>

	<div class="container">
		<form class="login-form" action="" method="post">
			<h2 class="form-title">Reset password
				<hr style="width: 90px; margin: 10px auto; height: 2px; background-color: #555; border-color: transparent">
			</h2>
			<!-- form validation messages -->
			<?php
			if (!empty($errors['e1'])) :
				echo '<div class="error">';
				echo '<p>';
				echo $errors['e1'];
				echo '</p>';
				echo '</div>';
			endif ?>
			<div class="input-box">
				<input type="email" id="email" name="email" placeholder="Enter your email address">
			</div>
			<br><br><br>

			<!-- form validation messages -->
			<?php
			if (!empty($errors['e2'])) :
				echo '<div class="error">';
				echo '<p>';
				echo $errors['e2'];
				echo '</p>';
				echo '</div>';
			endif ?>
			<div class="form-group">
				<label>New password:</label>
				<input type="password" name="new_pass">
			</div>
			<br>
			<div class="form-group">
				<label>Confirm new password:</label>
				<input type="password" name="new_pass_c">
			</div>
			<br>

			<div class="form-group">
				<button type="submit" name="reset-password" class="login-btn">Submit</button>
			</div>
			<a href="../test2/login.php" style="text-decoration: none" >
				<< Back to Login Page</a>
		</form>
	</div>

</body>

</html>