<html>
<meta charset="utf-8">
    <style>
        .nav-img{
            position: absolute;
            width: 8%;
            margin-left: 100px;
            margin-top: 30px;
        }
        nav{
            position: relative;
            width: 600px;
            height: 50px;
            background-color: transparent;
            border-radius: 8px;
            font-size: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
            float: right;
        }
        nav a{
            font-size: 15px;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
            line-height: 50px;
            position: relative;
            z-index: 1;
            display: inline-block;
            text-align: center;
        }
        nav .animation{
            position: absolute;
            height: 5px;
            bottom: 0;
            z-index: 0;
            background: white;

            transition: all .5s ease 0s;
        }
        a:nth-child(1){
            width: 100px;
        }
        nav .start-home,a:nth-child(1):hover~.animation{
            width: 100px;
            left: 0;
        }
        a:nth-child(2){
            width: 110px;
        }nav .start-about,a:nth-child(2):hover~.animation{
            width: 110px;
            left: 100px;
        }
        a:nth-child(3){
            width: 100px;
        }nav .start-events,a:nth-child(3):hover~.animation{
            width: 100px;
            left: 210px;
        }
        a:nth-child(4){
            width: 160px;
        }
        nav .start-contact,a:nth-child(4):hover~.animation{
            width: 160px;
            left: 310px;
        }
        a:nth-child(5){
            width: 120px;
        }
        nav .start-login,a:nth-child(5):hover~.animation{
            width: 120px;
            left: 470px;
        }
        
    </style>

    <img class="nav-img" src="../ShareDesign/images/Asset 2.png">
    
    <nav>
        <a href="../Home/home.php">Home</a>
        <a href="../About Us/about.php">About</a>
        <a href="../Events 2/event.php">Events</a>
        <a href="../Contact Us 2/contact.php">Contact Us</a>
        <a href="../Log in 2/account.php">Login</a>
        <div class="animation start-home"></div>
        <div class="animation start-about"></div>
        <div class="animation start-events"></div>
        <div class="animation start-contact"></div>
        <div class="animation start-login"></div>
    </nav>
</html>