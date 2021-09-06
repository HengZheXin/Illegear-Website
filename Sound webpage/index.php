<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="jquery.flipster.min.css">
    

    
</head>
<body>
<?php require_once '../ShareDesign/header2.php'; ?>
    <div class="container1">

        <div class="content1">
            <div class="left-col">
                <h2>IGS<br>Photo<br>Gallery</h1>
            </div>
            <div class="right-col">
                <p>Click Here for Music</p>
                <img src="media/play.png" id="icon">
            </div>
        </div>
        
    </div>
    
    <audio id="mySong">
        <source src="media/song.mp3" type="audio/mp3">
    </audio>
    
<script>
    var mySong = document.getElementById("mySong");
    var icon = document.getElementById("icon");

    icon.onclick = function(){
        if(mySong.paused){
            mySong.play();
            icon.src = "media/pause.png";
        }else{
            mySong.pause();
            icon.src = "media/play.png";
        }
    }
    
</script>

<div class="hero">
        <div class="carousel">
            <ul>
                <li><img src="images/7.jpg"></li>
                <li><img src="images/8.jpg"></li>
                <li><img src="images/9.jpg"></li>
                <li><img src="images/10.jpg"></li>
                <li><img src="images/12.jpg"></li>
                <li><img src="images/13.jpg"></li>
                <li><img src="images/15.jpg"></li>
                <li><img src="images/16.png"></li>
            </ul>
        </div>
    </div>
    
    
    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="jquery.flipster.min.js"></script>

<script>
    $('.carousel').flipster({
        style:'carousel',
        spacing: -0.3,
    });
</script>



    
</body>
</html>


<?php
require_once '../ShareDesign/footer.php';
?>




