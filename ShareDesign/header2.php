
<html>
    <style>
        
    .navbar1 {
    background-color: #24252A;
    }

    li, a, button{
        font-family: "Montserrat", sans-serif;
        font-weight: 500;
        font-style: 16px;
        color: black;
        text-decoration: none;
    }

    header{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 30px 10%;
    }

    button{
        margin-left: 20px;
        padding: 9px 25px;
        background-color: white;

        cursor: pointer;
        transition: all 0.3s ease 0s;
    }

    button:hover{
        background-color: rgba(0,136,169,0);
    }
        
    </style>
    <header>

    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                require_once 'functions.php';
                echo '<img class="logo" src="../ShareDesign/images/Asset 2.png" alt="logo">';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'functions.php';
                    echo '<li><a href = "../Home/home.php">Home</a></li>';
                    echo '<li><a href = "../About Us/about.php">About</a></li>';
                    echo '<li><a href = "../Events/event.php">Events</a></li>';
                    echo '<li><a href = "../Contact Us/contact.php">Contact Us</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "../Home/home.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "../Home/home.php">Home</a></li>';
                    echo '<li><a href = "../About Us/about.php">About</a></li>';
                    echo '<li><a href = "../Events/event.php">Events</a></li>';
                    echo '<li><a href = "../Contact Us/contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>
                
            </ul>
        </div><!--container div-->
    </nav>
    </header>
</html>