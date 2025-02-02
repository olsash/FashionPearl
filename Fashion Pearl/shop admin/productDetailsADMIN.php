<?php
$product_name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING) ?? 'Unknown Product';
$price = filter_input(INPUT_GET, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) ?? 0;
$image = filter_input(INPUT_GET, 'image', FILTER_SANITIZE_URL) ?? 'default-image.jpg';

$formatted_price = number_format($price, 2, '.', ',');
$image_path = file_exists($image) ? $image : 'default-image.jpg';
$sizes = ['XS','S', 'M', 'L', 'XL'];

?>

<script>
    const productName = "<?php echo htmlspecialchars($product_name); ?>";
    const productPrice = <?php echo $formatted_price; ?>;
    const productImage = "<?php echo htmlspecialchars($image_path); ?>";
</script>


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
            
            <div class="product-image">
                <img src="<?php echo htmlspecialchars($image_path); ?>" alt="Product Image">
            </div>

            <div class="product-details">
                <h1><?php echo htmlspecialchars($product_name); ?></h1>
                <h2>Price: <?php echo $formatted_price; ?>€</h2>

               
                <div class="reviews">
                    <div class="stars">★★★★★</div>
                    <span class="review-text">20 reviews</span>
                </div>


                <p class="description">
                    The FashionPearl clothing offers elegant and modern outfits designed for style and comfort.
                    Made from high-quality fabrics, each piece blends sophistication with everyday wearability.
                </p>
                <p class="usage">For Every occasion, blending modern trends with timeless elegance.</p>
                <h3 class="select-size"><strong>Select Size:</strong></h3>
                <div class="size-options">
                    <?php foreach ($sizes as $size): ?>
                        <button class="size-button" data-size="<?php echo $size; ?>">
                            <?php echo $size; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="quantity">
                    <label for="quantity">QTY:</label>
                    <input id="quantity" type="number" value="1" min="1">
                </div>

                <button id="add-to-cart-button">Add to Cart</button>

                <div class="additional-info">
                    <p>Dispatched in 5 – 7 weeks.</p>
                    <div class="form-container">
                    <form action="../shop admin/deleteProduct.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                    <form action="../shop admin/editProduct.php" method="GET">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($formatted_price); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($image_path); ?>">
                    <button type="submit" class="edit-button">Edit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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

<script src="productDetailsADMIN.js"></script>