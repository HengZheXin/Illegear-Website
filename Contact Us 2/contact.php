<!--Start function on (process.php)-->
<?php include('process.php')?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Illegear Website</title>
<link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="contact.css">
</head>
<body>
    
    
    
<!------- Section 1:Main Part------->
<?php require_once '../ShareDesign/header2.php'; ?>
    <div class="banner-area">
        <div class="banner-text">
            <p>Illegear Website</p><br/>
            <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
            <h2>Contact Us</h2><br/>
            
        </div>
    </div>
    
<!--Left Description-->
    <section class="contact-us">
            <div class="row3">
                <div class="contact-col">
                    <div>
                    <img src="https://img.icons8.com/ios/50/fa314a/aclc-college.png"/>                
                        <span>
                            <h5>Our Address</h5>
                            <p>Menara Oval Damansara, G3 & G3A, Ground Floor, Jalan Damansara, Taman Tun Dr Ismail, 60000 Kuala Lumpur, Federal Territory of Kuala Lumpur</p>
                        </span>
                    </div>
                    
                    <div>
                    <img src="https://img.icons8.com/ios/50/fa314a/email.png"/>                   
                        <span>
                            <h5>Sales@illegear.com</h5>
                            <p>Email us your query</p>
                        </span>
                        
                    </div>
                    <div>
                    <a href="https://www.facebook.com/Illegear/">
                    <img src="https://img.icons8.com/ios/50/fa314a/facebook--v1.png"/>    
                    </a>                        
                    <span>
                            <h5>TARUC Interactive Gaming Society</h5>
                            <p>Meet up our Illegear website</p>
                        </span>
                        
                    </div>
                    <div>
                    <a href="https://www.instagram.com/Illegear/">
                    <img src="https://img.icons8.com/ios/50/fa314a/instagram-reel.png"/>
                    </a>
                        <span>
                            <h5>Illegear</h5>
                            <p>More event poster on here</p>
                        </span>
                        
                    </div>
                </div>
                
                
            <!--Right Form-->
                <div class="contact-col">
                    <div class="display"></div>
                    <form method="POST" action="contact.php" id="contactFrm">
                    <label for="Title">Name:</label>
                    <input type="text" id="name" name="name" placeholder="John" value="<?php echo $name ?>">
                    <!--Error Message-->
                        <div class="error">
                            <?php echo $error['name']; ?>
                        </div>
                    <label for="Title">Email:</label>
                    <input type="email" id="email" name="email" placeholder="john@gmail.com" value="<?php echo $email ?>">
                    <!--Error Message-->
                        <div class="error">
                            <?php echo $error['email']; ?>
                        </div>
                    <label for="Title">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Event" value="<?php echo $subject ?>">
                    <!--Error Message-->
                        <div class="error">
                            <?php echo $error['subject']; ?>
                        </div>
                    <label for="Title">Message:</label>
                    <textarea rows="8" id="message" name="message"></textarea>
                    <!--Error Message-->
                        <div class="error">
                            <?php echo $error['message']; ?>
                        </div>
                    <button type="submit" id="submit" name="submit" class="hero-btn red-btn">Send Message</button>
                    </form> 
                </div>
            </div>
        
    </section>
    <!--Tarc Location In Google-->
    <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.640888374062!2d101.72733233555277!3d3.21611865099729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3843bfb6a031%3A0x2dc5e067aae3ab84!2sTunku%20Abdul%20Rahman%20University%20College!5e0!3m2!1sen!2smy!4v1627201902716!5m2!1sen!2smy" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>



</body>
</html>    
<?php require_once '../ShareDesign/footer.php'; ?>

