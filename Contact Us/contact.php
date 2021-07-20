<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="contact.css">
        <title>Bootstrap Web Design</title>
        <?php require 'styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>


    <div class="banner-area">
           <div class="banner-text">
               <p>IGS Society</p><br/>
               <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
               <h2>Contact Us</h2><br/>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.​</p>
               <a href="">OUR EVENTS</a>
           </div>
       </div>


       
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                <br><br><br><br>
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Jullian Engracio</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: julzengracio@yahoo.ie<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/julzengracio<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                    <br><br><br><br>
                </div>
            </div>
			
            
        </div><!--body content div-->
       
    </body>
</html>
