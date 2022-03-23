<html>
<head>
    <title>Gallery | Illegear Website</title>
    <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="jquery.flipster.min.css">
</head>



<body>
<?php require_once '../ShareDesign/header2.php'; ?>
    <div class="container1">
        <div class="content1">
            <div class="left-col">
                <h2>Illegear<br>Photo<br>Gallery</h1>
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
    <h2 class="gallery2">Past Events Images</h2>
    <hr class="gallery3">
        <div class="carousel">
            <ul>
                <li><img src="images2/desktop1.jpg"></li>
                <li><img src="images2/desktop2.jpg"></li>
                <li><img src="images2/desktop3.jpg"></li>
                <li><img src="images2/desktop5.jpg"></li>
                <li><img src="images2/desktop6.jpg"></li>
                <li><img src="images2/keyboard1.jpg"></li>
                <li><img src="images2/keyboard2.jpg"></li>
                <!-- <li><img src="../ShareDesign/images/tmf.png"></li>
                <li><img src="../ShareDesign/images/tmf2.png"></li>
                <li><img src="../ShareDesign/images/tmf3.png"></li>
                <li><img src="../ShareDesign/images/tmf4.png"></li>
                <li><img src="../ShareDesign/images/tmf5.png"></li>
                <li><img src="../ShareDesign/images/tmf6.png"></li>
                <li><img src="../ShareDesign/images/roadshow2.jpg"></li> -->
                
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

