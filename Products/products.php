<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore | Ecommerce Website Design</title>
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
<!----------------- title -------------->
<br/><br/><br/>
<div class="small-container">
   <div class="row row-2">
       <h2 style="color:white;">All Products</h2>
       <!-- <select>
           <option>Default Shorting</option>
           <option>Short by price</option>
           <option>Short by popularity</option>
           <option>Short by rating</option>
           <option>Short by sale</option>
       </select> -->
   </div>
    
             
           <div class="row">
               <div class="col-4">
                   
                   <a href="product-details.php"><img src="images/onyxv.png"></a>
                   <h4><a href="product-details.php">ONYX V (TGL)</a></h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$5000.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/onyxvamd.png">
                   <h4>ROGUE (TGL)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$4375.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/rogue.png">
                   <h4>ONYX V (AMD)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$4250.00</p>
               </div> 
                <div class="col-4">
                   <img src="images/onyx2.png">
                   <h4>ROGUE (AMD)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$5300.00</p>
               </div> 
           </div>
            
             <div class="row">
               <div class="col-4">
                   <img src="images/onyx3.png">
                   <h4>ONYX PRO (RTX30)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$4695.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/onyxpro.png                                                               ">
                   <h4>SELENITE PRO (RTX30)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$5255.00</p>
               </div> 
               <div class="col-4">
                   <img src="images/selennitepro.png">
                   <h4>ONYX G (RTX30)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   <p>$3000.00</p> 
               </div> 
                <div class="col-4">
                   <img src="images/selennitepro2.png">
                   <h4>SELENITE X (RTX30)</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <p>$5120.00</p>
               </div> 
           </div>
           
           <!-- <div class="page-btn">
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>&#8594;</span>
          </div> -->
</div>
    
<!----------Footer---------------> 

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col2">
               <img src="images/logo-white.png">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="footer-col3">
               <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter<li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"><a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1">Copyright 2020 - Easy Tutorials</a></p>
    </div>
    
</div>



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
    
</script>



</body>
</html>

