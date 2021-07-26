<?php
require_once 'functions.php';
require_once 'User.php';

start_session();

if (!is_logged_in()) {
    header("Location: ../Home/home.html");
}
else {
	unset($_SESSION['user']);
	
	header("../Home/home.html");
}
?>
