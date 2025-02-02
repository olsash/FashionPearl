
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