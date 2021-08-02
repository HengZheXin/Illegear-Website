<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="register.css">
        <title>Register | IGS Website</title>
        <?php require '../ShareDesign/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require '../ShareDesign/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>


        <?php
            require_once '../ShareDesign/header2.php';
        ?>
    <div class="banner-area">
           <div class="banner-text">
           <br><br>
               <p>IGS Society</p><br/>
               <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
               <h2>Register Form</h2><br/>
               <a href="../Login/login_form.php">Login</a>
           </div>
       </div>



        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="register.php" class ="form-group" method="POST">
                    <div class="form-group">
                        <br><br><br><br>
                            <label for="scode">Security Code: </label>
                            <input type="text"
                                   id="scode"
                                   name="scode"
                                   class="form-control"
                                   >
                            <span class="error">
                                <?php if (isset($errors['scode'])) echo $errors['scode']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($username)) echo $username; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                            </span>
                        </div>
                        <button type="submit" class = "btn btn-default">Register</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    require_once '../ShareDesign/footer.php';
?>