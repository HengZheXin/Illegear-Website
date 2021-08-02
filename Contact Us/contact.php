<?php

    $message_sent = false;
    $name = $phone = $email = $comments= "";
    $error = array('name'=>'','phone'=>'','email'=>'','comments'=>'');

    if(isset($_POST['submit'])){

        //check name
        if(empty($_POST['name'])){
            $error['name'] = 'Name is required!';
        }else{
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$name)){
                $error['name'] = 'Invalid name!';
            }
        }
        //check phone number
        if(empty($_POST['phone'])){
            $error['phone'] = 'Phone number is required!';
        }else{
            $phone = $_POST['phone'];
            if(!preg_match("/^[0]{1}[1]{1}[0-9]{1}-[0-9]{7,8}$/",$phone)){
                $error['phone'] = 'Invalid phone number!';

            }
        }
        //check email 
        if(empty($_POST['email'])){
            $error['email'] = 'Email is required!';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Invalid email address!';

            }
        }
        //check messages
        if(empty($_POST['comments'])){
            $error['comments'] = 'Messages is required!';
        }else{
            $comments = $_POST['comments'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$comments)){
                $error['comments'] = 'Invalid Message!';
            }
        }
        //success
        if(preg_match("/^[a-zA-Z-'\s]+$/",$name) && preg_match("/^[0]{1}[1]{1}[0-9]{1}-[0-9]{7,8}$/",$phone) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST['comments']) ){
            $message_sent = true;
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="contact.css">
        <title>Contact Us | IGS Website</title>
        <?php require 'styles.php'; ?>
        <?php require 'scripts.php'; ?>
        
    </head>
    <body>
        <?php
            require_once '../ShareDesign/header2.php';
        ?>
    <div class="banner-area">
        <div class="banner-text">
            <p>IGS Society</p><br/>
            <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
            <h2>Contact Us</h2><br/>
            
        </div>
    </div>
    


       
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                <br><br><br><br>
                    <h1>Get In Touch</h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.640888374062!2d101.72733233555277!3d3.21611865099729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3843bfb6a031%3A0x2dc5e067aae3ab84!2sTunku%20Abdul%20Rahman%20University%20College!5e0!3m2!1sen!2smy!4v1627201902716!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></h1>
                    <p>
                    <a href="https://www.facebook.com/taruc.igs/">
                    <img src="https://img.icons8.com/bubbles/50/000000/facebook.png"/>                    
                    </a>    
                    <a href="https://www.instagram.com/taruc.igs/">
                    <img src="https://img.icons8.com/bubbles/50/000000/instagram.png"/>                    
                    </a>
                    </p>
                </div>  
                <?php
                    if($message_sent):
                ?>
                    <h2>Thanks , we'll be in touch with u.</h2>
                <?php
                else:
                ?>
                
                <div class="col-md-6">
                <form action="contact.php"  method="POST" class="form-group">
                        <div class="form-group">
                            <label for="Title">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="John" value="<?php echo $name ?>">
                            <div class="error">
                                <?php echo $error['name']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Title">Phone Number:</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="012-3456789" value="<?php echo $phone ?>">
                            <div class="error">
                                <?php echo $error['phone']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Title">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="john@gmail.com" value="<?php echo $email ?>">
                            <div class="error">
                                <?php echo $error['email']; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comments">Message:</label>
                            <textarea id="comments" name="comments" rows="10" class="form-control" value="<?php echo $comments ?>"></textarea>
                            <div class="error">
                                <?php echo $error['comments']; ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default pull-right" name="submit" >Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                    <br><br><br><br>
                </div>
                    
            
            </div>
			</div><!--body content div-->
         <?php
         endif;
         ?>           
    </body>
</html>
<?php
    require_once '../ShareDesign/footer.php';
?>