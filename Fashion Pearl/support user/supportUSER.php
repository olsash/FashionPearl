
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

<title>Help Center</title>
    
    </head>
    <body>
    <form id="questionForm">
    <div class="qa-container">
        <input type="text" id="question" name="question" placeholder="Ask a question..." required>
        <button type="submit">Ask</button>
    </div>
    <div id="answer-container">
        <div id="answer"></div>
    </div>
    </form>
        <div class="container">
            <h1>How can we help you?</h1>
            <a href="contactUs.php">contact us</a>
            <div class="user-info">
                </span>
            </div>

            <div class="help-sections">
    <?php foreach ($faqs as $faq): ?>
    <div class="section">
        <button class="accordion"><?= htmlspecialchars($faq['question']); ?> <span>&#9662;</span></button>
        <div class="panel"><?= nl2br(htmlspecialchars($faq['answer'])); ?></div>
    </div>
    <?php endforeach; ?>
</div>

        
    </div>

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