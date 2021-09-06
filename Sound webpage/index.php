<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
<?php require_once '../ShareDesign/header2.php'; ?>
    <div class="container">

        <div class="content">
            <div class="left-col">
                <h2>Interactive<br>Gaming<br>Society</h1>
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
    
</body>
</html>







