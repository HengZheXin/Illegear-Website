
<html>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .title{
            color: white;
            font-size: 25px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: -30px;
            margin-bottom: 40px;
            margin-left: 40px;
        }
        .container{
            max-width: none;
            margin: auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #24262b;
            padding: 70px 0;
            line-height: 1.5;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .footer-col{
            width: 25%;
            padding: 0 95px;
            color: #bbbbbb;;
            line-height: 30px;
        }
        .footer-col h4{
            font-size: 19px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #ffffff;
            padding-left: 15px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }

        @media(max-width: 767px){
            .footer-col{
                width: 50%;
                margin-bottom: 30px;
            }
        }
        @media(max-width: 574px){
            .footer-col{
                width: 100%;
            }
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <footer class="footer">
        
        <div class="container">
            <div class="row">
                
                <div class="footer-col">
                    <img src = "../ShareDesign/images/Asset 3.png" style="width:270px; padding-top: 20px; margin-left:20px;">
                </div>
                <div class="footer-col">
                    <h4>Social Objectives</h4>
                    <p>Detailed Objectives:</p>
                    <p>sharing interests in games can:</p><br>
                    <p>a. Interact with each others</p>
                    <p>b. Cultivate personal development</p>
                    <p>c. Foster a healthy gaming lifestyle</p>
                </div>
                <div class="footer-col">
                    <h4>IGS</h4>
                    <ul>
                        <li><a href="../Events/event.php">Events</a></li>
                        <li><a href="../About Us/about.php">About Us</a></li>
                        <li><a href="../Contact Us/contact.php">Contact Us</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Join Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/taruc.igs"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/taruc.igs/"><i class="fab fa-instagram"></i></a>
                        <a href="https://discord.gg/XdYdW6Sw"><i class="fab fa-discord"></i></a>
                    </div>
                </div> 
            </div>
        </div>
    </footer>

</html>