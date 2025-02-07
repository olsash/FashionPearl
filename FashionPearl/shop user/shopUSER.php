<?php
session_start();
@include '../login/config.php';


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
  <link rel="stylesheet" href="shopUSER.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
</head>
<body>
    
    <div class="ribbon"></div>  

<header class="header">
  <nav class="nav">
  <a class="now" href="../index user/indexUSER.php">Home</a>
  <a class="shop" href="shopUSER.php">Shop</a>
  <a href="../about user/aboutUSER.php">About</a>
  <a href="../support user/supportUSER.php">Support</a>
</nav>
<div class="icons">
  <a href="#" id="search-icon"><ion-icon name="search"></ion-icon></a>
  <input type="text" id="search-input" class="hidden" placeholder="Search products...">
      <a href="#" id="cart-icon">
        <ion-icon name="cart"></ion-icon>
        <span id="cart-count">0</span>
    </a>

    <div id="cart-sidebar">
        <div class="cart-header">
            <h2 class="cart-title">Shopping Cart</h2>
            <button id="close-cart">&times;</button>
        </div>
        <div id="cart-items">
        </div>
        <div id="total-price-container">
        </div>
        <div class="cart-footer">
            <button id="checkout">Checkout</button>
        </div>    
</div>  <span class="separator">|</span>
  <a><ion-icon name="person-circle-outline" onclick="Auth.checkLogin()"></ion-icon></a>
</div>
</header>
<div id="search-bar-container" style="display: none;">
  <div class="search-bar-overlay" onclick="Search.toggle()"></div>
  <div class="search-bar">
    <input type="text" id="search-input" placeholder="Search products...">
    <button onclick="Search.perform()">Search</button>
  </div>
</div>
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

<div class="separator2"></div>
    <div class="filter-section">
        <div class="filter-collapsible">
        <h3 class="filter-toggle">Category
        <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
        </h3>
        <div class="filter-content">
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Women')" data-category="Women"></button> <span>Women</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Men')" data-category="Men"></button> <span>Men</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Accessories')" data-category="Accessories"></button> <span>Accesories</span>
        </label>
    </div>
</div>

<div class="filter-collapsible">
    <h3 class="filter-toggle">Collections
    <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
    </h3>
    <div class="filter-content">
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('All')" data-category="All"></button> <span>All</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Tops')" data-category="Tops"></button> <span>Tops</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('T-Shirt')" data-category="TShirt"></button> <span>T-Shirt</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Sweater')" data-category="Sweater"></button> <span>Sweater</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Jeans')" data-category="Jeans"></button> <span>Jeans</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Skirt')" data-category="Skirt"></button> <span>Skirt</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Dress')" data-category="Dress"></button> <span>Dress</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Hat')" data-category="Hat"></button> <span>Hat</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Shoes')" data-category="Shoes"></button> <span>Shoes</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Watch')" data-category="Watch"></button> <span>Watch</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Bags')" data-category="Bags"></button> <span>Bags</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Sunglasses')" data-category="Sunglasses"></button> <span>Sunnglasses</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Necklace')" data-category="Necklace"></button> <span>Necklace</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Earrings')" data-category="Earrings"></button> <span>Earrings</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="Filter.filterProduct('Ring')" data-category="Ring"></button> <span>Ring</span>
        </label>
    </div>
</div>

<div class="filter-collapsible">
            <h3 class="filter-toggle">Price Range
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
            </h3>
             <div class="filter-content">
                <label class="filter-button">
                <button class="button-value" onclick="Filter.filterProduct('0-50')" data-category="0-50"></button> <span>0€ - 50€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="Filter.filterProduct('50-100')" data-category="50-100"></button> <span>50€ - 100€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="Filter.filterProduct('100-150')" data-category="100-150"></button> <span>100€ - 150€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="Filter.filterProduct('150-more')" data-category="150-more"></button> <span>Over 150€</span>
                </label>
            </div>
        </div>        
    </div>
</div>
      
</section>


<div class="products">
    <h2>Our Products </h2>
    <div class="product-grid" id="products"></div>
</div>
</div>



</main>
<div class="sidebar" id="sidebar"></div>
<div class="overlay" id="overlay" onclick="Sidebar.close()"></div>

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

<script src="shopUSER.js"></script>