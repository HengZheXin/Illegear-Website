<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register | IGS Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       
<?php require_once '../ShareDesign/header2.php'; ?>
       
<!--------------Cart Items details--------------->
<div class="accout-page">

    <div class="container">
    
       <div class="row2">
         
          <div class="col-2">
             <img src="images/acc3.gif" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                     <hr id="indicator">
                 </div>
                 
               <form action="login.php" method="POST" id="LoginForm">
                    <input type="text" name="username" class="form-control" placeholder="Username"
                        value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                    />
                        <span class = "error"><!--error message for invalid input-->
                            <?php if (isset($errors['username'])) echo $errors['username']; ?>
                        </span>
                        <input type="password" name="password" class="form-control" placeholder="Password" value=""/>
                            <span class = "error"><!--error message for invalid input-->
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        <br><button type="submit" class="btn">Login</button>
                   <a href="../password-recovery/enter_email.php">Forgot password?</a>
               </form>

                
                <form action="register.php" class ="form-group" id="RegForm" method="POST">

                    <input type="text" id="scode" class="form-control" name="scode" value="" placeholder="Security Code">
                        <span class="error">
                            <?php if (isset($errors['scode'])) echo $errors['scode']; ?>
                        </span>
                    <input type="text" id="username" class="form-control" name="username" value="<?php if (isset($username)) echo $username; ?>" placeholder="Username">
                        <span class="error">
                            <?php if (isset($errors['username'])) echo $errors['username']; ?>
                        </span>
                    <input type="password" id="password" class="form-control" name="password" value="" placeholder="Password">
                        <span class="error">
                            <?php if (isset($errors['password'])) echo $errors['password']; ?>
                        </span>
                    <input type="password" id="cpassword" class="form-control" name="cpassword" value="" placeholder="Confirm Password">
                        <span class="error">
                            <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                        </span>
                    <button type="submit" class="btn">Register</button>
                </form>
              </div>
           </div>
       </div>
</div>
</div>



<!-------------js for toggle menu-------------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
     
</script>
<!------------------- form toggle ----------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };
        function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
            };
            
    </script>
    
    
    
</body>
</html>

<?php require_once '../ShareDesign/footer.php'; ?>