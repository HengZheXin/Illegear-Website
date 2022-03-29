<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php require_once '../ShareDesign/header2.php'; ?>
    <div class="container">
       <div class="navbar">
           <!-- <div class="logo">
               <a href="../BackEnd/BackEnd.html"><img src="images/logo.png" width="125px"></a>
           </div> -->
           <!-- <nav>
            <ul id="MenuItems">
                <li><a href="home.html">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.html">Account</a></li>
            </ul>
           </nav> -->
           <!-- <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a> -->
           <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
       </div>
       
    </div>
       
       
<!--------------single-product--------------->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/onyxv.png" width="100%" id="ProductImg">
            <div class="small-img-row">
               <div class="small-img-col">
                   <img src="images/onyxv.png" class="small-img" width="100%">
               </div>
               <div class="small-img-col">
                   <img src="images/onyxv.png" class="small-img" width="100%">
               </div>
               <div class="small-img-col">
                   <img src="images/onyxv.png" class="small-img" width="100%">
               </div>
               <div class="small-img-col">
                   <img src="images/onyxv.png" class="small-img" width="100%">
               </div>
    
            </div>
            
        </div>
        <div class="col-2">
            <p>Home / Laptops</p>
            <h1>ONYX V (TGL)</h1>
            <h4>$5000.00</h4>
            
            <select>
               <option>Select Size</option>
               <option>AMD</option>
               <option>Intel</option>
           </select>
            
            <input type="number" value="1">
            <a href="cart.php" class="btn">Add To Cart</a>
            
            <h3>PRODUCT DETAILS <i class="fa fa-indent"></i></h3>
            <br>
            <p>15.6” Sleek Performance On-the-Go <br/>

                15.6” Infinivision Narrow Bezel<br/>
                120Hz or 165Hz WQHD IPS sRGB 100% (300 nitts)<br/>
                11th Gen Intel® Core™ Processors<br/>
                GeForce GTX 16 or RTX 30 Series Graphics<br/>
                8GB (2 Slots, Up to 64GB)<br/>
                Anodized Aluminum Body<br/>
                1.85kg | 19mm</p>
        </div>
    </div>
</div>
<!----------------- title -------------->
<div class="small-container">
   <div class="row row-2">
       <h2>Related Products</h2>
       <p>View More</p>
   </div>
    
</div>
    
<!-------------- Our Products -------------->
<div class="small-container">
         
             <div class="row">
               <div class="col-4">
                   <img src="images/onyx2.png">
                   <h4>ROGUE (TGL)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$5750.00</p> 
               </div> 
               <div class="col-4">
                   <img src="images/onyx3.png">
                   <h4>ONYX V (AMD)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$5000.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/onyxpro.png">
                   <h4>ROGUE (AMD)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$5500.00</p>
               </div> 
                <div class="col-4">
                   <img src="images/selennitepro.png">
                   <h4>ONYX PRO (RTX30)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$5750.00</p>
               </div> 
           </div>
           
       </div>
  
     
   
<!----------Footer---------------> 

<?php require_once '../ShareDesign/footer.php'; ?>



<!-------------js for toggle menu-------------->

<script>
    
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
    
//-------------Produc Gallery------------
    
    var ProductImg = document.getElementById("ProductImg");
    
    var SmallImg = document.getElementsByClassName("small-img");
       
 
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        
        }

  //-------------End Produc Gallery------------  
    
    
    
    
</script>



</body>
</html>

