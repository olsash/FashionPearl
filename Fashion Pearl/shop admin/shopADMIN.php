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
<div id="search-bar-container" style="display: none;">
  <div class="search-bar-overlay" onclick="toggleSearchBar()"></div>
  <div class="search-bar">
    <input type="text" id="search-input" placeholder="Search products...">
    <button onclick="performSearch()">Search</button>
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
        <button class="button-value" onclick="filterProduct('Women')" data-category="Women"></button> <span>Women</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Men')" data-category="Men"></button> <span>Men</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Accesories')" data-category="Accessories"></button> <span>Accesories</span>
        </label>
    </div>
</div>

<div class="filter-collapsible">
    <h3 class="filter-toggle">Collections
    <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
    </h3>
    <div class="filter-content">
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('All')" data-category="All"></button> <span>All</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Tops')" data-category="Tops"></button> <span>Tops</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('T-Shirt')" data-category="TShirt"></button> <span>T-Shirt</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Sweater')" data-category="Sweater"></button> <span>Sweater</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Jeans')" data-category="Jeans"></button> <span>Jeans</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Skirt')" data-category="Skirt"></button> <span>Skirt</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Dress')" data-category="Dress"></button> <span>Dress</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Hat')" data-category="Hat"></button> <span>Hat</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Shoes')" data-category="Shoes"></button> <span>Shoes</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Watch')" data-category="Watch"></button> <span>Watch</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Bags')" data-category="Bags"></button> <span>Bags</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Sunnglasses')" data-category="Sunglasses"></button> <span>Sunnglasses</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Necklace')" data-category="Necklace"></button> <span>Necklace</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Earrings')" data-category="Earrings"></button> <span>Earrings</span>
        </label>
        <label class="filter-button">
        <button class="button-value" onclick="filterProduct('Ring')" data-category="Ring"></button> <span>Ring</span>
        </label>
    </div>
</div>

<div class="filter-collapsible">
            <h3 class="filter-toggle">Price Range
            <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
            </h3>
             <div class="filter-content">
                <label class="filter-button">
                <button class="button-value" onclick="filterProduct('0-50')" data-category="0-50"></button> <span>0€ - 50€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="filterProduct('50-100')" data-category="50-100"></button> <span>50€ - 100€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="filterProduct('100-150')" data-category="100-150"></button> <span>100€ - 150€</span>
                </label>
                <label class="filter-button">
                <button class="button-value" onclick="filterProduct('150-more')" data-category="150-more"></button> <span>Over 150€</span>
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
<div class="add-product-container" id="add-product-container">
    <h2>Add New Product</h2>
    <form action="addProduct.php" method="POST" enctype="multipart/form-data" class="add-product-form">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" required>

        <label for="price">Price (€):</label>
        <input type="number" step="0.01" name="price" id="price" required>

        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="Women">Women</option>
            <option value="Men">Men</option>
            <option value="Accessories">Accessories</option>
        </select>

        <label for="collections">Collections:</label>
        <select name="collections" id="collections">
            <option value="Tops">Tops</option>
            <option value="TShirt">T-Shirt</option>
            <option value="Sweater">Sweater</option>
            <option value="Jeans">Jeans</option>
            <option value="Skirt">Skirt</option>
            <option value="Dress">Dress</option>
            <option value="Hat">Hat</option>
            <option value="Shoes">Shoes</option>
            <option value="Watch">Watch</option>
            <option value="Bags">Bags</option>
            <option value="Sunglasses">Sunglasses</option>
            <option value="Necklace">Necklace</option>
            <option value="Earrings">Earrings</option>
            <option value="Ring">Ring</option>
        </select>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" required>

        <button type="submit" class="add-product-btn">Add Product</button>
        <button type="button" class="close-btn" id="close-btn">Close</button>
    </form>
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