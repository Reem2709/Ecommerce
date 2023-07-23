<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Product Details</title>
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
    <a href="cart.html"><i class="fas fa-shopping-cart p-2"></i></a>
  
    </div>
 </div>

   <!---single product details-->

   <div class="small-container single-product">
       <div class="row">
           <div class="col-2">
            <img src="img 9.jpg" width="100%" id="ProductImg">
            <div class="small-img-row">
            <div class="small-img-col">
                <img src="img 9.jpg" width="100%" class="small-img"> 
            </div>
            <div class="small-img-col">
                <img src="d 1.jpg" width="100%" class="small-img"> 
            </div>
            <div class="small-img-col">
                <img src="d 2.jpg" width="100%" class="small-img"> 
            </div>
            <div class="small-img-col">
                <img src="d 3.jpg" width="100%" class="small-img"> 
            </div>
          </div>
           </div>
           <div class="col-2">
               <p>Home / Table</p>
               <h2>Nesting Coffee Table, Brushed Brass and Glass</h2>
               <h4>$329.99</h4>
               <select>
                   <option>Select Size</option>
                   <option>Width 120cm</option>
                   <option>Width 90cm</option>
                   <option>Width 45cm</option>
               </select>
               <input type="number" value="1">
               <a href="" class="btn">Add To Cart</a>

               <h3>Product Details<i class="fas fa-indent"></i></h3>
               <p>Transform your living space with great design. 
                   Appreciating simple geometry, the angular metal frame blends 
                   seamlessly into its circular glass surface. Genius.</p>
           </div>
       </div>
   </div>

 <!---title--->
 <div class="small-container">
     <div class="row row-2">
      <h2>Related Products</h2>
      <p>View More</p>
     </div>
 </div>
 
 <!----products-->
<div class="small-container">

   
  <div class="row">
    
        <div class="col-4">
          <img src="img 8.webp">
          <h4>Flash Furniture Metal Chair Hercules</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>$329.99</p>
        </div>
        <div class="col-4">
          <img src="img 10.jpg">
          <h4>Bamboo Round Wall Mirror 80cm, Natural</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$150.00</p>
        </div>
        <div class="col-4">
          <img src="img 11.jpg">
          <h4>Wide Shelving Unit, Mango Wood & Brass</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>
        
        </div>
      </div>

      <div class="page-btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#8594;</span>
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

<script>
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
</script>
</body>
</html> 