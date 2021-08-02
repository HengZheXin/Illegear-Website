
<!DOCTYPE html>
<html lang="en">
<style>

@charset "utf-8";

html {
    background: black;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Header */
.header-area{
    background-image: url("images/hometry.png");
    background-position: center center;
    background-size: cover;
    -webkit-background-size: cover;
    height: 100vh;
    min-height: 100%;
    box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.3);
    
}

.header-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
    text-align: center;
    padding: 35px;
}

.header-text h2{
    font-family: sans-serif;
    font-weight: 800;
    margin-bottom: 3%;
    font-size: 80px;
}

.header-text p{
    font-size: 22px;
    font-weight: 1000;
    line-height: 25px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

body{
    margin: 0;
    padding: 0;
    background: #34495e;
}

@media (max-width: 820px){

}

/* Section 1 */
.section1{
    background-color: rgb(26, 25, 25);
    color: white;
    position: relative;
}

.special{
    background-color: rgba(168, 168, 168, 0.466);
    border: 0px solid rgba(168, 168, 168, 0.466);
    font-size: 13px;
    padding: 50px;
    display: inline-block;
    margin-top: 6%;
    margin-left: 20%;
    font-family: poppins;
    line-height: 55px;
}

.special p{
    font-size: 16px;
}

.special h1{
    font-size: 55px;
}

.description{
    font-family: Arial, Helvetica, sans-serif;
    line-height: 30px;
    font-size: 18px;
    padding: 50px;
    margin-left: 20%;
}

.sec1pic img{
    position: relative;
    margin-left: 950px;
    margin-top: -450px;
}

@media (max-width: 1000px){
    .sec1pic img{
        margin-left: 335px;
        margin-top: 70px;
    }
}

/* Section 2 */
.section2{
    background-color: rgb(26, 25, 25);
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* Section 3 */

.ps4-front img{
    position: absolute;
    margin-top: -760px;
    margin-left: 270px;
}

.sec3nav{
    text-align: left;
    margin-left: 1200px;
    margin-top: -380px;
    position: absolute;
}

.sec3nav a{
    text-decoration: none;
    font-size: 23px;
    color: black;
    display: inline;
    font-family: 'Times New Roman', Times, serif;
}

.sec3nav a:hover{
    color: lightblue;
    transition: .8s;
}

/* Section 4 */
.section4{
    margin-top: -5px;
    background-color: lightgrey;
    width: 100%;
    height: 40vh;
    position: relative;
}

.sec4-h1{
    position: absolute;
    text-align: left;
    margin-left: 300px;
    margin-top: 80px;
    font-size: 23px;
}

.sec4-p{
    position: absolute;
    text-align: right;
    font-size: 25px;
    font-family: 'Courier New', Courier, monospace;
    margin-left: 1000px;
    margin-top: 160px;
}

/* Section 5 */
.section5{
    background-color: rgb(54, 53, 53);
    color: white;
    position: relative;
}

.sec5header{
    text-align: center;
}

.sec5header h1{
    font-size: 50px;
    padding-top: 50px;
    padding-bottom: 30px;
}

.sec5header p{
    font-size: 20px;
    line-height: 30px;
}

.row1{
    position: absolute;
    display: grid;
    grid-template-columns: 33.33% 33.33% 33.33%;
    place-items: center;
    background-color: rgb(54, 53, 53);
}

.rows{
    position: relative;
}

.col1, .col2, .col3{
    position: relative;
}

.games{
    width: 100%;
    height: 380px;
    object-fit: cover;
    padding: 4px;
}

.overlay{
    position: absolute;
    min-width: 99.5%;
    height: 98%;
    top: 0;
    opacity: 0;
    background: white;
}

.text{
    z-index: 99;
    font-size: 25px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 30%;
}

.overlay:hover{
    opacity: 1;
    transition: 1s;
}

/* Section 6 */
.section6{
    background-color: rgb(54, 53, 53);
    width: 100%;
    height: 80vh;
    position: relative;
    margin-top: 1150px;
}

.leftpic{
    width: 55%;
    padding-top: 100px;
}

.leftpic img{
    width: 100%;
}

.righttext{
    width: 45%;
    float: right;
    margin-top: -370px;
    color: white;
    text-align: center;
}

.righttext h1{
    font-size: 55px;
}

.righttext p{
    font-size: 19px;
}

.righttext a{
    text-decoration: none;
    border: 1px solid white;
    background: white;
    padding: 17px 60px;
    color: black;
}

.righttext a:hover{
    background: black;
    color: white;
    transition: 1s;
}
</style>

    <head>
        <meta charset = "UTF-8">
        <title>Home | IGS Website</title>
    </head>

    <body>

<!-- Header -->

        <div class="header-area">

        <?php
            require_once '../ShareDesign/header2.php';
        ?>

            <div class="header-text">
                <h2><ins>IGS</ins> Society</h2><br/>
                <p>Bringing the game to Everyone’s Life</p>
            </div>
        </div>

<!-- Section 1-->

        <section class="section1">
            <div class="special">
                <p><b>WHAT'S SO SPECIAL ABOUT</b></p>
                <h1>Our Society</h1>
            </div>
            <div class="description">
                <p>Casual and fun society in KL TARUC. </p>
                <p>We want you to enjoy your college life !</p>
                <p><b>Tunku Abdul Rahman University College</b></p>
            </div>
            <div class="sec1pic">
                <img src="images/keyboardtry.png" alt="ps_controller" style="width: 24%">
            </div>
        </section>

<!-- Section 2 -->
        
        <section class="section2">
            <div class="slideshow-container">
                <br><br><br><br>
                <div class="mySlides fade">
                  <img src="images/logo6.png" style="width:70%; height:450px; margin-left: 150px">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slidetry1.png" style="width:70%; height:450px; margin-left: 150px">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slidetry3.png" style="width:70%; height:450px; margin-left: 150px">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                </div>
                <br><br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                <br><br><br><br>
                <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                }
                </script>
        </section>

<!-- Section 3 -->

        <section class="section3">
            <div class="ps4-back">
                <img src="images/ps4-back.png" style="width: 100%">
            </div>
            <div class="ps4-front">
                <img src="images/ps4-front.png" style="width: 550px; height: 670px;">
            </div>
            <div class="sec3nav">
                <a href=""><b>GAMING TOURNAMENT</b></a><br><br>
                <a href=""><b>GAME TRENDS</b></a><br><br>
                <a href=""><b>LATEST NEWS</b></a><br><br>
                <a href=""><b>ABOUT US</b></a><br><br>
            </div>
        </section>

<!-- Section 4 -->

        <section class="section4">
            <div class="sec4-h1">
                <h1><b>Join our community now and</b></h1>
                <h1><b>discuss about popular games</b></h1>
            </div>
            <div class="sec4-p">
                <p><b>COME BACK EVERY MONTH TO</b></p>
                <p><b>CHECK OUT OUR NEWEST UPDATES</b></p>
            </div>
        </section>

<!-- Section 5 -->

        <section class="section5">
            <div class="sec5header">
                <h1>OUR GAME COMMUNITY</h1>
                <p><i>Join Us Now!</i></p>
                <p><i>Enjoy Your Game Beyond Reality</i></p><br><br>
            </div>
            <div class="rows">
                <div class="row1">
                    <div class="col1">
                        <img class="games" src="images/lol.jpg" alt="League of Legends">
                        <div class="overlay">
                            <div class="text">LEAGUE OF LEGENDS</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/genshin.jpg" alt="Genshin Impact">
                        <div class="overlay">
                            <div class="text">GENSHIN IMPACT</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/valorant.png" alt="Valorant">
                        <div class="overlay">
                            <div class="text">VALORANT</div>
                        </div>
                    </div>
                
                    <div class="col1">
                        <img class="games" src="images/mobilelegends.png" alt="Mobile Legends: Bang Bang">
                        <div class="overlay">
                            <div class="text">MOBILE LEGENDS: BANG BANG</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/apexlegends.png" alt="Apex Legends">
                        <div class="overlay">
                            <div class="text">APEX LEGENDS</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/pubg.png" alt="PUBG Mobile">
                        <div class="overlay">
                            <div class="text">PUBG MOBILE</div>
                        </div>
                    </div>
            
                    <div class="col1">
                        <img class="games" src="images/minecraft.png" alt="Minecraft">
                        <div class="overlay">
                            <div class="text">MINECRAFT</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/rainbowsix.jpg" alt="Rainbox Six Siege">
                        <div class="overlay">
                            <div class="text">RAINBOW SIX SIEGE</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/fortnite.jpg" alt="Fortnite">
                        <div class="overlay">
                            <div class="text">FORTNITE</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- Section 6 -->
        <section class="section6">
            <div class="leftpic">
                <img src="images/bottomlogo.png" alt="Logo">
            </div>
            <div class="righttext">
                <h1>JOIN OUR SOCIETY</h1><br><br>
                <p>We will be always a "house of players" at our core, are you up to the challenge?</p>
                <p> </p><br><br><br>
                <a href="">VIEW MORE</a>
            </div>  
        </section>
    </body>

</html>

<?php
    require_once '../ShareDesign/footer.php';
?>