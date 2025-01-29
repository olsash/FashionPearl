<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionPearl || Home</title>
  <link rel="stylesheet" href="shopADMIN.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
</head>
<body>
    
    <div class="ribbon"></div>  

<header class="header">
  <nav class="nav">
  <a class="now" href="../index admin/indexADMIN.php">Home</a>
  <a class="shop" href="shopADMIN.php">Shop</a>
  <a href="#">About</a>
  <a href="#">Support</a>
</nav>
<div class="icons">
  <a href="#" id="search-icon"><ion-icon name="search"></ion-icon></a>
  <input type="text" id="search-input" class="hidden" placeholder="Search products...">
  <a href="#"><ion-icon name="cart"></ion-icon></a>
  <span class="separator">|</span>
  <a><ion-icon name="person-circle-outline" onclick="checkLogin()"></ion-icon></a>
</div>
</header>
<main>

<div class="filter-container">
    <div class="filter-title"><h2>Filters</h2></div>

    <div class="filter-section">
        <h3>Size</h3>
        <div class="filter-options">
            <div class="filter-option">XS</div>
            <div class="filter-option">S</div>
            <div class="filter-option">M</div>
            <div class="filter-option">L</div>
            <div class="filter-option">XL</div>
    </div>
</div>

</main>
<div class="sidebar" id="sidebar"></div>
<div class="overlay" id="overlay" onclick="closeSidebar()"></div>

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
  <p>support@fashionpearl.com</p>
</div>
<div class="footer-bottom">
  <p>&copy; 2024 FashionPearl. All rights reserved.</p>
</div>
</footer>

</body>
</html>

<script src="shopADMIN.js"></script>