<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="contact.css">
        <title>Bootstrap Web Design</title>
        <?php require 'styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'scripts.php'; ?><!--js links. file found in utils folder-->
        <script src="function.js">
        </script>
    </head>
    <body>


    <div class="banner-area">
           <div class="banner-text">
               <p>IGS Society</p><br/>  
               <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
               <h2>Contact Us</h2><br/>
               <p>Whatever your question we are here to help​</p>
           </div>
       </div>
    


       
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                <br><br><br><br>
                    <h1>Get In Touch</h1><!--body content title-->
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
                <div class="col-md-6">
                    <form name="myForm" onsubmit="return validateForm()" method="post">
                        <div class="form-group">
                            <label for="Title">Name:</label>
                            <input type="text" name="fname" id="Title" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="Title">Phone Number:</label>
                            <input type="text" name="fphone" id="Title" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="Title">Email:</label>
                            <input type="text" name="fmail" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" name="fmsg" rows="10" class="form-control" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                    <br><br><br><br>
                </div>
            </div>
			
            
        </div><!--body content div-->
       
    </body>
</html>
