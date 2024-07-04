<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TodayFashionFusion</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <section id="header">
    <a href="#"><img src="images/logo3-removebg-preview.png" class="logo"
        style="margin-top: -10px; margin-bottom: -10px;"></a>

    <div>
      <ul id="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.hTml">About</a></li>
        <li><a class="active" href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-square-xmark"></i></a>


      </ul>
    </div>
    <div id="mobile">
      <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>

  <section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>LEAVE A MESSAGE.We love to hear from you!</p>
  </section>

  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>GET IN TOUCH</span>
      <h4>Visit one of our agency locations or contact us today</h4>
      <h3>Head Office</h3>
      <div>
        <li>
          <i class="fas fa-map"></i>
          <p>LALBHAI DALPATBHAI COLLEGE OF ENGINEERING,University Area, Ahmedabad</p>
        </li>
        <li>
          <i class="fas fa-envelope"></i>
          <p>contact@gmail.com</p>
        </li>
        <li>
          <i class="fas fa-phone"></i>
          <p>+91 7045685212</p>
        </li>
        <li>
          <i class="fas fa-clock"></i>
          <p>10:00 - 18:00, Mon - Sat</p>
        </li>

      </div>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2338381649097!2d72.54670866517347!3d23.033672708325817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84eaf57ac615%3A0x5c7498bb96b34c97!2sL.D.%20College%20Of%20Engineering!5e0!3m2!1sen!2sin!4v1717300050316!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <section id="form-details">
    <form action="addcontact.php" method="post">
      <span>LEAVE A MESSAGE</span>
       <h4>We love to hear from you</h4>
       <input type="text" name="name" placeholder="Your Name">
       <input type="text" name="email" placeholder="E-mail">
       <input type="text" name="subject" placeholder="Subject">
       <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
       <button class="normal">Submit</button>
    </form>
    <div class="people">
      <div>
        <img src="images/1.png" alt="">
        <p><span>Td Chaudhari</span> Seniour Marketing Manager <br>phone +91 6573573920 
          <br> E-mail: tdchau516@gmail.com</p>
      </div>
      <div>
        <img src="images/2.png" alt="">
        <p><span>Hd Chaudhari</span> Marketing Manager <br>phone +91 8548466920 
          <br> E-mail: hdch16@gmail.com</p>
      </div>
    </div>
  </section>

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up for Newsletters</h4>
      <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address">
      <button class="normal">SIgn Up</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <img class="logo1" src="images/logo3-removebg-preview.png" style="margin: -40px;">
      <h4>Contact</h4>
      <p><strong>Address:</strong> Navarangpura Unversity Area,Ahmedabad Gujarat </p>
      <p><strong>Phone:</strong> +91 7045685212</p>
      <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
      <h4>Follow us</h4>
      <div class="icon">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-pinterest"></i>
        <i class="fa-brands fa-youtube"></i>

      </div>
    </div>

    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">COntact Us</a>

    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>

    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img src="images/app.jpg" alt="">
        <img src="images/play.jpg" alt="">
      </div>
      <p>Secure Payment Gateways</p>
      <img src="images/pay.png" alt="">

    </div>

    <div class="copy">
      <p>@ 2023, Tdchaudhari - HTML CSS Ecommerce Template</p>
    </div>

  </footer>
  <script src="script.js"></script>
</body>

</html>