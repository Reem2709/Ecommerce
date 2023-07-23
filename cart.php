<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Cart Details</title>
<link rel="stylesheet" href="style1.css">
<meta name="viewport" content="witdh=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/10bfc4c5e7.js" crossorigin="anonymous"></script>
</head>
<body>

  <!----header---->

 <div class="container">
  <div class="navbar">
    <div class="logo">
      <img src= "logo.png" width="125px"> 
    </div>
    <nav>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="product.php">PRODUCTS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="acc.php">ACCOUNT</a></li>
      </ul>
    </nav>
    <a href="cart.php"><i class="fas fa-shopping-cart p-2"></i></a>
    </div>
 </div>

  <!---cart item details  -->

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
                        <img src="img 5.webp">
                        <div>
                            <p>Outdoor Patio Side Teak Table</p>
                            <small>Price: $125.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$125.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img 6.jpg">
                        <div>
                            <p>Himalayan Salt Lamp Touch</p>
                            <small>Price: $440.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$440.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img 7.png">
                        <div>
                            <p>Graduate Lounge Chair Tan</p>
                            <small>Price: $220.50</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$220.50</td>
            </tr>
       </table>

       <div class="total-price">
           <table>
               <tr>
                   <td>Subtotal</td>
                   <td>$785.50</td>
               </tr>
               <tr>
                   <td>Tax</td>
                   <td>$30.50</td>
               </tr> 
                <tr>
                   <td>Toatl</td>
                   <td>$816</td>
            </tr>
           </table>
       </div>
    </div>
<!---Footer---->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download Now for Best Furniture and Lot More</p>
        <div class="app-logo">
          <img src="icon 1.png">
          <img src="icon 2.png">
        </div>
        </div>
        <div class="footer-col-2">
         <img src="logo.png" width="125px">
          <p>Our purpose is to Sustainably make the Pleasure and Benefits of Home Accessories Available to All</p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Posts</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
            </div>
            <div class="footer-col-4">
              <h3>Follow Us</h3>
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>YouTube</li>
              </ul>
              </div>
            </div>
            <hr>
            <p class="copyright">Destino © 2021 All Rights Reserved.</p>
  </div>
</div>


</body>
</html> 
