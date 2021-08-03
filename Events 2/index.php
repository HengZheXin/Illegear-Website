<html>
<head>
    <title>Property Website - Easy Tutorials</title>
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>


    <?php require_once '../ShareDesign/header2.php'; ?>

    <div class="banner-area">
        <div class="banner-text">
            <p>IGS Society</p><br/>
            <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
            <h2>Our Events</h2><br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.​</p>
            <a href="">VIEW OUR EVENTS</a>
        </div>
    </div>

    <div class="hero">
<div class="btn-box">
<button id="btn1" onclick="openHTML()"><i class="fa fa-calendar-plus-o"></i>Upcoming Event</button>
<button id="btn2" onclick="openCSS()"><i class="fa fa-calendar-minus-o"></i>Past Event</button>

</div>
        <div id="content1" class="content">
            <div class="content-left">
            <h1>Players Recruitment</h1>
                <p>With the upcoming showdown, opportunities are now given to those who think they will fit the roster perfectly. Each categories' team leader will filter and select those who had the minimum requirements then will be notified of a tryout.</p>
                <a href="#">Join Event</a>
            </div>
            <div class="content-right">
                <img src="images/3.jpg">
            </div>
        </div>
        
        <div id="content2" class="content">
            <div class="content-left">
                <h1>TARUC Mobile Festival (TMF)</h1>
                <p>TARUC Interactive Gaming Society is back by introducing a new tournament called TARUC MOBILE FESTIVAL (TMF)!! This event is focused on mobile games such as Mobile Legend, PUBG Mobile and 王者荣耀.</p>
                <a href="#">Join Event</a>
            </div>
            <div class="content-right">
                <img src="images/15.jpg">
            </div>
        </div>
        
    </div>
    
    <script>
        var content1 = document.getElementById("content1");
        var content2 = document.getElementById("content2");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        
        function openHTML(){
            content1.style.transform = "translateX(0)";
            content2.style.transform = "translateX(100%)";
            btn1.style.color = "#ff7846";
            btn2.style.color = "#000";
            content1.style.transitionDelay = "0.3s";
            content2.style.transitionDelay = "0s";
        }
        function openCSS(){
            content1.style.transform = "translateX(100%)";
            content2.style.transform = "translateX(0)";
            btn2.style.color = "#ff7846";
            btn1.style.color = "#000";
            content1.style.transitionDelay = "0s";
            content2.style.transitionDelay = "0.3s";
        }
        function openJS(){
            content1.style.transform = "translateX(100%)";
            content2.style.transform = "translateX(100%)";
            btn3.style.color = "#ff7846";
            btn2.style.color = "#000";
            btn1.style.color = "#000";
            content1.style.transitionDelay = "0s";
            content2.style.transitionDelay = "0s";
        }
        
    </script>
    
</body>
</html>
<?php require_once '../ShareDesign/footer.php'; ?>