<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-img" id="fullImgBox">
        <img src="images" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>
   <div class="img-gallery">
       <img src="images/7.jpg" onclick="openFullImg(this.src)">
       <img src="images/8.jpg" onclick="openFullImg(this.src)">
       <img src="images/9.jpg" onclick="openFullImg(this.src)">
       <img src="images/10.jpg" onclick="openFullImg(this.src)">
       <img src="images/12.jpg" onclick="openFullImg(this.src)">
       <img src="images/13.jpg" onclick="openFullImg(this.src)">
       <img src="images/15.jpg" onclick="openFullImg(this.src)">
       <img src="images/16.png" onclick="openFullImg(this.src)">
   </div>

<script>

  var fullImgBox = document.getElementById("fullImgBox");
  var fullImg = document.getElementById("fullImg");

  function openFullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
  }

  function closeFullImg(){
    fullImgBox.style.display = "none";
  }

</script>
</body>
</html>
