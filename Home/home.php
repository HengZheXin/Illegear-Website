<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <title>Home | IGS Website</title>
    <link rel="shortcut icon" href="images/test1.png" type="image/x-icon"></head>

<body>

    <!-- Header -->

    <div class="header-area">

        <?php
        require_once '../ShareDesign/header2.php';
        ?>

        <div class="header-text">
            <h2><ins>IGS</ins> Society</h2><br />
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
            <img src="images/keyboardtry.png" alt="ps_controller" style="width: 23%">
        </div>
        <br><br><br><br><br>
    </section>

    <!-- Section 2 -->
    <!--
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
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </section> -->

    <!-- Section 3 -->

    <section class="section3">
        <div class="ps4-back">
            <img src="images/ps4-back.png" style="width: 100%">
        </div>
        <div class="ps4-front">
            <img src="images/ps4-front.png" style="width: 550px; height: 670px;">
        </div>
        <div class="sec3nav">
            <a href="../Events 2/index.php"><b>OUR EVENTS</b></a><br><br>
            <a href="../About Us/about.php"><b>ABOUT US</b></a><br><br>
            <a href="../Contact Us 2/contact.php"><b>CONTACT US</b></a><br><br>
            <a href="../Gallery/gallery.php"><b>GALLERY</b></a><br><br>
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
                    <a href="https://www.leagueoflegends.com/en-gb/" target="_blank">
                        <img class="games" src="images/lol.jpg" alt="League of Legends">
                        <div class="overlay">
                            <div class="text">LEAGUE OF LEGENDS</div>
                        </div>
                    </a>
                </div>
                <div class="col2">
                    <a href="https://genshin.mihoyo.com/en/home" target="_blank">
                        <img class="games" src="images/genshin.jpg" alt="Genshin Impact">
                        <div class="overlay">
                            <div class="text">GENSHIN IMPACT</div>
                        </div>
                    </a>
                </div>
                <div class="col3">
                    <a href="https://playvalorant.com/en-us/" target="_blank">
                        <img class="games" src="images/valorant.png" alt="Valorant">
                        <div class="overlay">
                            <div class="text">VALORANT</div>
                        </div>
                    </a>
                </div>

                <div class="col1">
                    <a href="https://m.mobilelegends.com/en" target="_blank">
                        <img class="games" src="images/mobilelegends.png" alt="Mobile Legends: Bang Bang">
                        <div class="overlay">
                            <div class="text">MOBILE LEGENDS: BANG BANG</div>
                        </div>
                    </a>
                </div>
                <div class="col2">
                    <a href="https://www.ea.com/en-gb/games/apex-legends" target="_blank">
                        <img class="games" src="images/apexlegends.png" alt="Apex Legends">
                        <div class="overlay">
                            <div class="text">APEX LEGENDS</div>
                        </div>
                    </a>
                </div>
                <div class="col3">
                    <a href="https://www.pubgmobile.com/en-US/home.shtml" target="_blank">
                        <img class="games" src="images/pubg.png" alt="PUBG Mobile">
                        <div class="overlay">
                            <div class="text">PUBG MOBILE</div>
                        </div>
                    </a>
                </div>

                <div class="col1">
                    <a href="https://www.minecraft.net/en-us" target="_blank">
                        <img class="games" src="images/minecraft.png" alt="Minecraft">
                        <div class="overlay">
                            <div class="text">MINECRAFT</div>
                        </div>
                    </a>
                </div>
                <div class="col2">
                    <a href="https://www.ubisoft.com/en-gb/game/rainbow-six/siege" target="_blank">
                        <img class="games" src="images/rainbowsix.jpg" alt="Rainbox Six Siege">
                        <div class="overlay">
                            <div class="text">TOM CLANCY'S RAINBOW SIX SIEGE</div>
                        </div>
                    </a>
                </div>
                <div class="col3">
                    <a href="https://www.epicgames.com/fortnite/en-US/home" target="_blank">
                        <img class="games" src="images/fortnite.jpg" alt="Fortnite">
                        <div class="overlay">
                            <div class="text">FORTNITE</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->

    <section class="section6">
        <div class="leftpic">
            <img src="../ShareDesign/images/12.jpg" alt="Logo" style="margin-left: 20px;" height="480" width="75">
        </div>
        <div class="righttext">
            <h1>JOIN OUR SOCIETY</h1><br><br>
            <p>We will be always a "house of players" at our core, are you up to the challenge?</p>
            <p> </p><br><br><br>
            <a href="../Events 2/index.php">VIEW MORE</a>
        </div>
    </section>
</body>

</html>

<?php
require_once '../ShareDesign/footer.php';
?>