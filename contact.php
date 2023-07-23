<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="style1.css">
<body>

    <div class="container">
        <div class="navbar">
          <div class="logo">
            <img src= "logo.png" width="125px"> 
          </div>
          <nav>
            <ul>
              <li><a href="home.php">HOME</a></li>
              <li><a href="products.php">PRODUCTS</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="contact.php">CONTACT</a></li>
              <li><a href="acc.php">ACCOUNT</a></li>
            </ul>
          </nav>
          <a href="cart.php"><i class="fas fa-shopping-cart p-2"></i></a>
          
          </div>
       </div>
    
    <h1>Contact Form</h1>
    
    <div class="container">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div>
    
    </body>
    </html>