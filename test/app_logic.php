<?php 

session_start();
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

  if (empty($email)) {
    array_push($errors, "Your email is required");
    
  }else if(mysqli_num_rows($results) <= 0) {
    $errors = "Sorry, no user exists on our system with that email";
    echo "<form method='post' action='enter_email.php'>";
    echo "<input type='hidden' name='error' value='$errors'>";
    echo "</form>";
    header('location: enter_email.php');
  }else if(mysqli_num_rows($results) == 1){
    // ENTER A NEW PASSWORD
    if (isset($_POST['reset-password'])) {
      $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
      $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
      if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
      if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
      if (empty($errors)) {
        // select email address of user from the users table 
        $sql = "SELECT email FROM users  WHERE email='$email'";
        $results = mysqli_query($db, $sql);
        $email = mysqli_fetch_assoc($results)['email'];
        if (isset($email)) {
          $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
          $results = mysqli_query($db, $sql);
        }
      }
  }
}

}
?>