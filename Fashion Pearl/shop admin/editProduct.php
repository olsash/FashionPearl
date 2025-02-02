

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Product Page</title>
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

    </div>
  </header>

<body>
     <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
         <div class="product-image">
            
            <img src="<?php echo htmlspecialchars($image); ?>" alt="Product Image" >
            <div class="product-image">
              
            </div>
            
            <div class="product-details">
                <h1>Edit Product Name: </h1>
                <input type="text" name="new_name" value="<?php echo htmlspecialchars($product_name); ?>" required>
                <h2>Edit Product Price: </h2>
                <input type="number" name="new_price" value="<?php echo htmlspecialchars($price); ?>" required>

                <h1>Edit Product Category:</h1>
                <select name="new_category" id="category" required>
                <option value="Women" <?php echo ($category === 'Women') ? 'selected' : ''; ?>>Women</option>
                <option value="Men" <?php echo ($category === 'Men') ? 'selected' : ''; ?>>Men</option>
                <option value="Accessories" <?php echo ($category === 'Accessories') ? 'selected' : ''; ?>>Accessories</option>
                </select>

                <h1>Edit Product Collection:</h1>
                <select name="new_collections" id="collections">
                <option value="Tops" <?php echo ($collection === 'Tops') ? 'selected' : ''; ?>>Tops</option>
                <option value="TShirt" <?php echo ($collection === 'TShirt') ? 'selected' : ''; ?>>T-Shirt</option>
                <option value="Sweater" <?php echo ($collection === 'Sweater') ? 'selected' : ''; ?>>Sweater</option>
                <option value="Jeans" <?php echo ($collection === 'Jeans') ? 'selected' : ''; ?>>Jeans</option>
                 <option value="Skirt" <?php echo ($collection === 'Skirt') ? 'selected' : ''; ?>>Skirt</option>
                <option value="Dress" <?php echo ($collection === 'Dress') ? 'selected' : ''; ?>>Dress</option>
                <option value="Hat" <?php echo ($collection === 'Hat') ? 'selected' : ''; ?>>Hat</option>
                <option value="Shoes" <?php echo ($collection === 'Shoes') ? 'selected' : ''; ?>>Shoes</option>
                <option value="Watch" <?php echo ($collection === 'Watch') ? 'selected' : ''; ?>>Watch</option>
                <option value="Bags" <?php echo ($collection === 'Bags') ? 'selected' : ''; ?>>Bags</option>
                <option value="Sunglasses" <?php echo ($collection === 'Sunglasses') ? 'selected' : ''; ?>>Sunglasses</option>
                <option value="Necklace" <?php echo ($collection === 'Necklace') ? 'selected' : ''; ?>>Necklace</option>
                <option value="Earrings" <?php echo ($collection === 'Earrings') ? 'selected' : ''; ?>>Earrings</option>
                <option value="Ring" <?php echo ($collection === 'Ring') ? 'selected' : ''; ?>>Ring</option>
                </select>

                <h1>Upload New Image:</h1>
            <input type="file" name="image" accept="image/jpeg, image/png, image/gif">

            <button type="submit" class="edit-button">Save Changes</button>
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
