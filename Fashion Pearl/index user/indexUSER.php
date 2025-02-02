<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionPearl || Home</title>
  <link rel="stylesheet" href="indexUSER.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
</head>
<body>
   <header class="header">
   <!-- <a href="index.html" class="logo"><ion-icon name="menu-outline"></ion-icon></a> -->
    <nav class="nav">
      <a class="now" href="indexUSER.php">Home</a>
      <a href="../shop user/shopUSER.php">Shop</a>
      <a href="#">About</a>
      <a href="#">Support</a>
    </nav>
    <div class="icons">
      <a ><ion-icon name="person-circle-outline" onclick="checkLogin()"></ion-icon></a>
    </div>
  </header>
  <main class="main-banner">
    <div class="banner-content">
      <h1>INDULGE <br> NOW</h1>
      <p>Your Wardrobe, Our Planet</p>
      <button class="shop-now-btn" onclick="window.location.href='../shop admin/shopADMIN.php'">Shop now</button>
    </div>
  </main>
  <div class="sidebar" id="sidebar"></div>
  <div class="overlay" id="overlay" onclick="closeSidebar()"></div>
   <section class="photo-gallery">
    <div class="photo">
        <img src="../foto/model-image.png" alt="Photo 1">
    </div>
    <div class="photo">
        <img src="../foto/jisoooo.jpg" alt="Photo 2">
        <div class="photo-text">Shop Now</div>
    </div>
    <div class="photo">
        <img src="../foto/foto3.jpeg" alt="Photo 3">
        <div class="photo-text">New Collection</div>
    </div>
  </section>

    <div class="social-links">
    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
  </div>
  
   <div class="white-ribbon"></div>
  
   <footer class="footer">
  <div class="footer-section">
    <h3>FashionPearl</h3>
    <p>Fashion Pearl offers elegant clothing and accessories for every style and occasion, combining high quality with modern designs.</p>
  </div>

  <div class="footer-section">
    <h3>Shop</h3>
    <ul>
      <li><a href="#">Men's Collection</a></li>
      <li><a href="#">Women's Collection</a></li>
      <li><a href="#">Accessories</a></li>
    </ul>
  </div>
  <div class="footer-section">
    <h3>Contact Us</h3>
    <p>(+383)44 123-456</p>
    <p><a href="mailto:support@fashionpear.com">support@fashionpearl.com</a></p>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 FashionPearl. All rights reserved.</p>

  </div>
</footer>
</body>
</html>


<script src="indexUSER.js"></script>
