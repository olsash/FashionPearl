<?php
session_start();
@include '../login/config.php';


$username = $_SESSION['username'];

if (empty($username)) {
    echo "Përdoruesi nuk është gjetur!";
    exit();
}

$username = mysqli_real_escape_string($conn, $username);

$query = "SELECT * FROM user_form WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
    if (!$user) {
        echo "Përdoruesi nuk është gjetur në bazën e të dhënave!";
        exit();
    }
} else {
    echo "Gabim në ekzekutimin e query-t: " . mysqli_error($conn);
    exit();
}

$sql = "SELECT question, answer FROM faqs";
$result = $conn->query($sql);

$faqs = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $faqs[] = $row;
    }
}

$conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="supportUSER.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

   <!-- <a href="index.html" class="logo"><ion-icon name="menu-outline"></ion-icon></a> -->
   <div class="ribbon"></div>  

<header class="header">
  <nav class="nav">
  <a class="now" href="../index USER/indexUSER.php">Home</a>
  <a href="../shop user/shopUSER.php">Shop</a>
  <a href="../about user/aboutUSER.php">About</a>
  <a class="support" href="supportUSER.php">Support</a>
</nav>
<div class="icons">
 
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

    </html>
    <script src="supportUSER.js"></script>
