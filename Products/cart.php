<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once '../ShareDesign/header2.php'; ?>
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
       
       
<!--------------Cart Items details--------------->
<br/><br/><br/>
<div class="small-container cart-page">
   
   <table>
       <tr>
           <th>Product</th>
           <th>Quantity</th>
           <th>Subtotal</th>
       </tr>

       <tr>
           <td>
               <div class="cart-info">
                   <img src="images/onyxv.png">
                   <div>
                       <p>ONYX V (AMD)</p>
                       <small>Price: $5000.00</small><br>
                       <a href="">Remove</a>
                   </div>
               </div>
           </td>
           <td><input type="number" value="1"></td>
           <td>$5000.00</td>
       </tr>
       <tr>
           <td>
               <div class="cart-info">
                   <img src="images/onyx2.png">
                   <div>
                       <p>ROGUE (TGL)</p>
                       <small>Price: $5700.00</small><br>
                       <a href="">Remove</a>
                   </div>
               </div>
           </td>
           <td><input type="number" value="1"></td>
           <td>$5700.00</td>
       </tr>
       <tr>
           <td>
               <div class="cart-info">
                   <img src="images/onyx2.png">
                   <div>
                       <p>ONYX V (TGL)</p>
                       <small>Price: $5750.00</small><br>
                       <a href="">Remove</a>
                   </div>
               </div>
           </td>
           <td><input type="number" value="1"></td>
           <td>$5750.00</td>
       </tr>
   </table>
    
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$16,450.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$16,470.00</td>
            </tr>
            
        </table>
    </div>
    <!-- <div class="total-price">
        <a href="#" class="btn">Proceed to checkout &#8594;</a>
    </div> -->
    
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
    
    
</script>



</body>
</html>

