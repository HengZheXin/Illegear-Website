<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Website Design - Easy Tutorials</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="contact.css">
</head>
<body>
    
    
    
<!------- Contact Us ------->
<?php require_once '../ShareDesign/header2.php'; ?>
    <div class="banner-area">
        <div class="banner-text">
            <p>IGS Society</p><br/>
            <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
            <h2>Contact Us</h2><br/>
            
        </div>
    </div>
    
    
    
    <section class="contact-us">
            <div class="row3">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Tunku Abdul Rahman University College</h5>
                            <p>53300 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>03-4145 0123</h5>
                            <p>Monday to Saturday 10 Am to 6 Pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <span>
                            <h5>info@igs.com</h5>
                            <p>Email us your query</p>
                        </span>
                        
                    </div>
                    <a href="https://www.facebook.com/taruc.igs/">
                    <img src="https://img.icons8.com/bubbles/50/000000/facebook.png"/>                    
                    </a>    
                    <a href="https://www.instagram.com/taruc.igs/">
                    <img src="https://img.icons8.com/bubbles/50/000000/instagram.png"/>                    
                    </a>
                </div>
                
            
                <div class="contact-col">
                    <form method="post" action="contact-form-handler.php">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                    </form> 
                </div>
            </div>
        
    </section>
    
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.640888374062!2d101.72733233555277!3d3.21611865099729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3843bfb6a031%3A0x2dc5e067aae3ab84!2sTunku%20Abdul%20Rahman%20University%20College!5e0!3m2!1sen!2smy!4v1627201902716!5m2!1sen!2smy" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

 
    
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    
<?php require_once '../ShareDesign/footer.php'; ?>