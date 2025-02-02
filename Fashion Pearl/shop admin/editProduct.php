

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

      <style>


h1, h2 {
    color: #333;
    font-weight: bolder;
}

.product-image {
    margin-top:0px;
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-image img {
    margin-top:0px;
    margin-left: 5%;
    width: 100%;
    max-width: 480px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product-details {
    padding:30px;
    padding-bottom:40px;
    margin-left:-25%;
    margin-right: 50px;
    flex: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input, select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.edit-button {
    background-color: black;
    color: white;
    border: none;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.5s;
}

.edit-button:hover {
    background-color: gray;
    transform: scale(1.010);
}


body {
  margin: 0;
  font-family: 'Roboto', sans-serif;
  color: #333;
  background: white;
  background-size: cover;
  height: 100vh;
  display: flex;
  flex-direction: column;
  padding-bottom: 80px; 
}

a {
  text-decoration: none;
  color: #333;
}


.nav{
  margin-top: 20px;
  margin-left : 385px;
}

.logo ion-icon {
  margin-top: 13px;
  font-size: 35px;
}

.nav a {
  margin: 30px;
  font-weight: 500;
  font-size: 1rem;
  transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease; 
  position: relative;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 10px;
  padding-bottom: 10px; 
  border-radius: 20px;
  font-weight: bold;
}

.nav a:hover {
  color: black;
  background-color: white;
  padding-left: 30px;
  padding-right: 30px;
  transform: scale(1.1); 
}

.shop{
  color: black;
  background-color: white;
  transform: scale(1.1);
}

@media (max-width: 1024px) {
    .product-details {
        margin-left: 0; 
        margin-right: 10px;
        padding: 20px;
    }

    .product-image img {
        max-width: 100%;
        margin-left: 0;
    }

    .nav {
        margin-left: 20px;
    }
}

@media (max-width: 768px) {
    body {
        padding-bottom: 40px; 
    }

    .product-image {
        flex-direction: column;
    }

    .product-image img {
        max-width: 90%;
    }

    .product-details {
        margin-left: 0;
        margin-right: 0;
        padding: 10px;
    }

    .nav {
        margin-left: 0;
        text-align: center;
    }

    .nav a {
        margin: 15px;
        font-size: 0.9rem;
    }

    .shop {
        font-size: 1.1rem; 
    }
}

@media (max-width: 480px) {
    .product-details {
        padding: 10px;
    }

    .nav {
        margin-left: 0;
    }

    .nav a {
        font-size: 0.8rem;
        padding-left: 15px;
        padding-right: 15px;
    }

    .product-image img {
        max-width: 100%; 
    }

    .shop {
        font-size: 1rem;
    }
}


.icons{
  margin-top: 22px;
}

.icons a {
  font-size: 18px; 
  color: black; 
  text-decoration: none; 
  margin-right: 15px; 
}

.separator {
  color: black; 
  font-size: 25px; 
  margin-right: 15px; 
}

.icons a:hover, .separator:hover {
  color: gray; 
}



.main-banner {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative; 
  top: 0;
  left: 0;
  height: 100%; 
  width: 100%; 
  z-index: 10; 
  text-align: center;
}

.banner-content {
  color: #fff;
  z-index: 2;
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
  width: 80%;
  padding: 0 2rem; 
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.banner-content h1 {
  font-family: 'Playfair Display', serif;
  font-size: 100px;
  margin-right: 500px;
  text-align: left;
  line-height: 1.2; 
  color: black;
  margin-bottom: 0;
}

.banner-content h1 span {
  display: block; 
}

.banner-content p {
  font-size: 1.5rem; 
  margin: 1rem 0;
  line-height: 1.5;
  margin-right: 670px;
  margin-top: 0;
  margin-bottom: 0;
}

.ribbon {
  position: absolute;
  top: 0; 
  left: 0; 
  margin-bottom: 0px;
  padding: 10px 0; 
  width: 100%; 
  height: 85px; 
  background-color: #cdd0da; 
  z-index: 998; 
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  position: sticky;
  top: 0;
  z-index: 1000;
  position: relative;
  width: 96%;
}

main {
  margin-top: 20px;
  display: flex;
  gap: -5px;
  padding: 20px;
  align-items: flex-start;  
}

@media (max-width: 1024px) {
  #search-input {
    right: 20px;
    width: 150px;
  }

  .banner-content {
    width: 90%; 
    padding: 0 1rem;
  }

  .banner-content h1 {
    font-size: 60px; 
    margin-right: 0;
    text-align: center;
  }

  .banner-content p {
    font-size: 1.2rem;
    margin-right: 0;
  }

  .header {
    padding: 1rem;
  }

  main {
    flex-direction: column; 
    gap: 15px;
  }
}

@media (max-width: 768px) {
  #search-input {
    width: 120px; 
    right: 10px;
  }

  .banner-content h1 {
    font-size: 50px; 
    margin-right: 0;
  }

  .banner-content p {
    font-size: 1.1rem;
  }

  .header {
    padding: 1rem;
  }

  .main-banner {
    height: 80%; 
  }

  .banner-content {
    padding: 0;
    width: 100%;
  }

  .icons {
    margin-top: 15px;
  }

  .icons a {
    font-size: 16px; 
  }

  .separator {
    font-size: 20px;
  }
}

@media (max-width: 480px) {
  #search-input {
    width: 100px;
    right: 5px; 
  }

  .banner-content h1 {
    font-size: 40px;
    margin-right: 0;
  }

  .banner-content p {
    font-size: 1rem;
  }

  .header {
    padding: 1rem;
  }

  .main-banner {
    height: 70%; 
  }

  .banner-content {
    width: 100%;
    padding: 0 1rem;
  }

  .icons a {
    font-size: 14px; 
  }

  .separator {
    font-size: 18px;
  }
}

.footer {
font-size: 14px;
font-family: 'Roboto', sans-serif;
background-color: #000;
padding: 20px 10px;
color: #fff;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
padding-left: 90px; 
}

.footer-section {
flex: 1;
margin: 10px 80px;
margin-left: 80px;
margin-bottom: 20px;
}

.footer-section:nth-child(2) {
margin-left: 170px; 
}

.footer-bottom {
width: 93%;
margin-right:20px;
border-top: 1px solid #444;
padding-top: 20px;
text-align: left;
}

.footer-bottom p{
margin-left: 70px;
}

.footer-section h3 {
font-size: 18px;
margin-bottom: 15px;
}


.footer-section ul {
list-style: none;
padding: 0;
}

.footer-section ul li {
margin-bottom: 10px;
}

.footer-section ul li a {
color: #fff;
text-decoration: none;
font-size: 14px;
}

.footer-section ul li a:hover {
text-decoration: underline;
}