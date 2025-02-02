<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

   <!-- <a href="index.html" class="logo"><ion-icon name="menu-outline"></ion-icon></a> -->
   <div class="ribbon"></div>  

<header class="header">
  <nav class="nav">
  <a class="now" href="../index user/indexUSER.php">Home</a>
  <a class="shop" href="shopUSER.php">Shop</a>
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