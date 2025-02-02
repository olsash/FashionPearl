<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionPearl || About Us</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init();
    });
  </script>

</head>
<body>
    <div class="ribbon"></div>  

    <header class="header">
        <nav class="nav">
            <a class="now" href="../index user/indexUSER.php">Home</a>
            <a class="shop" href="shopUSER.php">Shop</a>
            <a class="about" href="aboutUSER.php">About</a>
            <a href="#">Support</a>
        </nav>
        <div class="icons">
            <a><ion-icon name="person-circle-outline" onclick="checkLogin()"></ion-icon></a>
        </div>
    </header>
<main>
        <!-- Slider Section -->
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="../foto/1.jpg" alt="Image 1"></div>
                <div class="slide"><img src="../foto/2.jpg" alt="Image 2"></div>
                <div class="slide"><img src="../foto/3.jpg" alt="Image 3"></div>
                <div class="slide"><img src="../foto/4.jpg" alt="Image 4"></div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        </main>
        <!-- About Section -->
        <section class="about-content">
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="about-section" data-aos="fade-up">';
                    echo '<span class="about-icon">' . htmlspecialchars($row["icon"]) . '</span>';
                    echo '<div>';
                    echo '<h2>' . htmlspecialchars($row["title"]) . '</h2>';
                    echo '<p>' . nl2br(htmlspecialchars($row["content"])) . '</p>';
                    echo '</div></div>';
                }
            } else {
                echo "<p>No content available.</p>";
            }
            ?>
        </section>