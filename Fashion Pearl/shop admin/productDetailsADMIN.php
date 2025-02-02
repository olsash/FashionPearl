<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Product Page</title>
      <link rel="stylesheet" href="productDetailsADMIN.css">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
      <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
  </head>
  <div class="ribbon"></div>  
  <header class="header">
    <nav class="nav">
      <a class="now" href="../index admin/indexADMIN.php">Home</a>
      <a class="shop" href="shopADMIN.php">Shop</a>
      <a href="#">About</a>
      <a href="#">Support</a>
    </nav>
    <div class="icons">
    <a href="#" id="cart-icon">
    <ion-icon name="cart"></ion-icon>
        <span id="cart-count">0</span>
    </a>

    <div id="cart-sidebar">
        <div class="cart-header">
            <h2>Shopping Cart</h2>
            <button id="close-cart">&times;</button>
        </div>
        <div id="cart-items">
        </div>
        <div class="cart-footer">
            <button id="checkout">Checkout</button>
        </div>
    </div>
</div>

</div>
  </header>

<body>
    <div class="container">
        <div class="product-grid">
            <!-- Product Image -->
            <div class="product-image">
                <img src="<?php echo htmlspecialchars($image_path); ?>" alt="Product Image">
            </div>

            <!-- Product Details -->
            <div class="product-details">
                <h1><?php echo htmlspecialchars($product_name); ?></h1>
                <h2>Price: <?php echo $formatted_price; ?>€</h2>

                <!-- Reviews -->
                <div class="reviews">
                    <div class="stars">★★★★★</div>
                    <span class="review-text">20 reviews</span>
                </div>

                <!-- Description -->
                <p class="description">
                    The FashionPearl clothing offers elegant and modern outfits designed for style and comfort.
                    Made from high-quality fabrics, each piece blends sophistication with everyday wearability.
                </p>
                <p class="usage">For Every occasion, blending modern trends with timeless elegance.</p>
