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
      <link rel="stylesheet" href="productDetailsUSER.css">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300&display=swap">
      <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
  </head>
  <div class="ribbon"></div>  
  <header class="header">
    <nav class="nav">
      <a class="now" href="../index user/indexUSER.php">Home</a>
      <a class="shop" href="shopUSER.php">Shop</a>
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
    <style>
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

  
  @media screen and (max-width: 768px) {
    .nav {
      margin-left: 20px;
      margin-top: 10px;
    }
  
    .logo ion-icon {
      font-size: 30px;
    }
  
    .nav a {
      margin: 15px;
      font-size: 0.9rem;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 8px;
      padding-bottom: 8px;
    }
  }
  
  @media screen and (max-width: 480px) {
    .nav {
      margin-left: 10px;
      margin-top: 5px;
    }
  
    .logo ion-icon {
      font-size: 25px;
    }
  
    .nav a {
      margin: 10px;
      font-size: 0.8rem;
      padding-left: 15px;
      padding-right: 15px;
      padding-top: 5px;
      padding-bottom: 5px;
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
  
  
    
  
  .container {
      width: 90%;
      margin: 0 auto;
      padding: 40px;
  }
  
  .product-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
  }
  
  .product-image {
      display: flex;
      justify-content: center;
      align-items: center;
  }
  
  .product-image img {
      width: 75%;
      border-radius: 10px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .product-details {
      display: flex;
      flex-direction: column;
      justify-content: center;
  }
  
  .product-details h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
  }
  
  .product-details h2 {
      font-size: 20px;
      font-weight: semi-bold;
      margin-bottom: 20px;
  }

@media screen and (max-width: 768px) {
    .main-banner {
      height: auto;
      padding: 20px;
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
  
    .footer {
      flex-direction: column;
      padding-left: 20px;
    }
  
    .footer-section {
      margin: 10px 0;
      margin-left: 0;
      margin-bottom: 15px;
    }
  
    .footer-section:nth-child(2) {
      margin-left: 0;
    }
  
    .footer-bottom p {
      margin-left: 0;
    }
  
    .container {
      width: 100%;
      padding: 20px;
    }
  
    .product-grid {
      grid-template-columns: 1fr;
    }
  
    .product-image img {
      width: 100%;
    }
  }
  
  @media screen and (max-width: 480px) {
    .header {
      padding: 1rem;
    }
  
    .icons a {
      font-size: 16px;
      margin-right: 10px;
    }
  
    .separator {
      font-size: 20px;
      margin-right: 10px;
    }
  
    .banner-content h1 {
      font-size: 40px;
    }
  
    .banner-content p {
      font-size: 1rem;
    }
  
    .footer-section {
      margin-left: 0;
      margin-bottom: 10px;
    }
  
    .product-details h1 {
      font-size: 20px;
    }
  
    .product-details h2 {
      font-size: 18px;
    }
  }

  .reviews {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.stars {
    color: #fbbf24;
    font-size: 18px;
}

.review-text {
    margin-left: 10px;
    color: #6b7280;
    font-size: 14px;
}

.description {
    color: #374151;
    margin-bottom: 20px;
    line-height: 1.5;
}

.usage {
    color: #374151;
    margin-bottom: 20px;
}

.quantity {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.quantity label {
    color: #374151;
    margin-right: 10px;
}

.quantity input {
    width: 50px;
    text-align: center;
    border: 1px solid #d1d5db;
    border-radius: 5px;
    padding: 5px;
}

#add-to-cart-button {
    background-color: black;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    border: none;
}

#add-to-cart-button:hover {
    background-color: #333;
}

.additional-info {
    margin-top: 20px;
    font-size: 14px;
    color: #6b7280;
}


.form-container {
        display: flex;
        gap: 10px; 
    }
    form {
        margin: 0;
    }

      @media (max-width: 768px) {
    .product-grid {
        grid-template-columns: 1fr;
    }

    #add-to-cart-button{
        width: 100%;
        font-size: 14px;
        padding: 12px;
    }

    .form-container {
        flex-direction: column;
    }

    .quantity {
        flex-direction: column;
    }
    
    .stars {
        font-size: 14px;
    }

    .review-text {
        font-size: 12px;
        margin-left: 0;
    }
}

@media (max-width: 480px) {
    .stars {
        font-size: 12px;
    }

    .review-text {
        font-size: 10px;
    }

    .description, .usage, .additional-info {
        font-size: 12px;
    }

    .quantity input {
        width: 35px;
    }

    #add-to-cart-button{
        font-size: 12px;
        padding: 10px;
    }

    .form-container {
        flex-direction: column;
        gap: 5px;
    }
}

  #cart-icon {
    position: relative;
    font-size:20px;
  }
  
  #cart-count {
    position: absolute;
    top: -13px;
    right: -7px;
    background-color: red;
    color: white;
    font-size: 11px;
    padding-right: 6px;
    padding-left:6px;
    padding-bottom: 1px;
    padding-top: 2px;
    border-radius: 50%;
  }
  
  #cart-sidebar {
    position: fixed;
    top: 0;
    right: -400px; 
    width: 400px;
    height: 100%;
    background: #fff;
    box-shadow: -4px 0 15px rgba(0, 0, 0, 0.15);
    transition: right 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    z-index: 1000;
    border-radius: 10px 0 0 10px;
  }
  
  #cart-sidebar.open {
    right: 0;
  }
  
  .cart-title {
    margin: 10px;
    margin-left: 10px;
    font-size: 20px;
  }
  
  .cart-header{
    padding: 20px;
    font-size: 20px;
    font-weight: bold;
    background: #cdd0da;
    color: white;
    text-align: left;
    border-radius: 10px 0 0 0;
  }
  
  #close-cart {
    position: absolute;
    top: 21px;
    right: 25px;
    font-size: 20px;
    background: none;
    border: none;
    cursor: pointer;
    color: white;
  }
  
  #close-cart:hover {
    color: #ddd;
  }
  
  #cart-items {
    flex-grow: 1;
    overflow-y: auto;
    padding: 15px;
  }
  
  .cart-item-content {
    display: flex;
    align-items: center;
    background: #fafafa;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .cart-item-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 15px;
    border: 2px solid #cdd0da;
  }
  .cart-item-details {
    flex-grow: 1;
    text-align: left;
  }
  
  .cart-item-name {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 3px;
  }
  
  .cart-item-price {
    font-size: 14px;
    color: #777;
    margin-top: 3px;
  }
  
  .cart-remove-btn {
    background: none;
    border: none;
    font-size: 18px;
    color: gray;
    cursor: pointer;
    transition: 0.2s;
    margin-right: 10px;
  }
  
  .cart-remove-btn:hover {
    color: #ddd;
    transform: scale(1.2);
  }
  
  .cart-footer {
    padding: 15px;
    background: #f8f8f8;
    border-top: 1px solid #ddd;
    text-align: center;
  }

    @media (max-width: 1024px) {
    #cart-sidebar {
        width: 300px;
    }

    #cart-icon {
        font-size: 18px;
    }

    #cart-count {
        font-size: 10px;
        padding: 4px 5px;
    }

    .cart-title {
        font-size: 18px;
    }

    .cart-header {
        font-size: 18px;
    }

    .cart-item-name {
        font-size: 14px;
    }

    .cart-item-price {
        font-size: 12px;
    }

    .cart-remove-btn {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    #cart-sidebar {
        width: 250px;
    }

    #cart-icon {
        font-size: 16px;
    }

    #cart-count {
        font-size: 9px;
        padding: 4px 5px;
    }

    .cart-header {
        font-size: 16px;
    }

    .cart-item-name {
        font-size: 14px;
    }

    .cart-item-price {
        font-size: 12px;
    }

    .cart-remove-btn {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    #cart-sidebar {
        width: 200px;
    }

    #cart-icon {
        font-size: 14px;
    }

    #cart-count {
        font-size: 8px;
        padding: 3px 5px;
    }

    .cart-header {
        font-size: 14px;
    }

    .cart-item-name {
        font-size: 12px;
    }

    .cart-item-price {
        font-size: 10px;
    }

    .cart-remove-btn {
        font-size: 12px;
    }
}

#checkout {
    background: black;
    color: #fff;
    border: none;
    padding: 14px;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s;
  }
  
  #checkout:hover {
    background: gray;
    transform: scale(1.05);
  }
  
  
.size-options {
  display: flex;
  gap: 10px;
  margin-top: 10px;
  margin-bottom: 20px;

}

.size-button {
  padding: 5px 10px;
  border: 2px solid #000;
  background-color: white;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.3s ease-in-out;
}

.size-button:hover {
  background-color: black;
  color: white;
}

.size-button.selected {
  background-color: black;
  color: white;
}

@media (max-width: 768px) {
  #checkout {
      font-size: 14px; 
      padding: 10px;
  }

  .size-button {
      font-size: 12px; 
      padding: 4px 8px; 
  }

  .size-options {
      gap: 8px;
  }
}

@media (max-width: 480px) {
  #checkout {
      font-size: 14px;
      padding: 10px;
  }

  .size-button {
      font-size: 12px;
      padding: 4px 6px; 
  }

  .size-options {
      gap: 6px; 
  }
}
    </style>
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

<script>

document.addEventListener("DOMContentLoaded", function () {
    const cartIcon = document.getElementById("cart-icon");
    const cartCount = document.getElementById("cart-count");
    const cartSidebar = document.getElementById("cart-sidebar");
    const closeCart = document.getElementById("close-cart");
    const cartItemsContainer = document.getElementById("cart-items");
    const addToCartButton = document.getElementById("add-to-cart-button");
    const sizeButtons = document.querySelectorAll(".size-button");

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let selectedSize = null; 

    sizeButtons.forEach(button => {
        button.addEventListener("click", function () {
            sizeButtons.forEach(btn => btn.classList.remove("selected"));
            this.classList.add("selected");
            selectedSize = this.getAttribute("data-size");
        });
    });


    document.getElementById("cart-icon").addEventListener("click", function() {
    document.getElementById("cart-sidebar").classList.toggle("open");
});

document.getElementById("close-cart").addEventListener("click", function() {
    document.getElementById("cart-sidebar").classList.remove("open");
});

sizeButtons.forEach(button => {
    button.addEventListener("click", function () {
        sizeButtons.forEach(btn => btn.classList.remove("selected"));
        this.classList.add("selected");
        selectedSize = this.getAttribute("data-size"); 
    });
});



    cartIcon.addEventListener("click", () => {
        cartSidebar.classList.toggle("show");
    });

    closeCart.addEventListener("click", () => {
        cartSidebar.classList.remove("show");
    });

    addToCartButton.addEventListener("click", () => {
    if (!selectedSize) {
        alert("Please select a size before adding to cart!");
        return;
    }

    const productName = "<?php echo htmlspecialchars($product_name); ?>";
    const productPrice = parseFloat("<?php echo str_replace(',', '', $formatted_price); ?>");
    const productImage = "<?php echo htmlspecialchars($image_path); ?>";
    const quantity = parseInt(document.getElementById("quantity").value, 10);

    if (isNaN(quantity) || quantity < 1) {
        alert("Please enter a valid quantity.");
        return;
    }

    let existingItem = cart.find(item => item.productName === productName && item.size === selectedSize);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({ 
            productName, 
            price: productPrice, 
            image: productImage, 
            quantity, 
            size: selectedSize  
        });
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartUI();
    updateCartCount();
});

function updateCartUI() {
    cartItemsContainer.innerHTML = "";
    cart.forEach((item, index) => {
        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = `
            <div class="cart-item-content">
                <img src="${item.image}" class="cart-item-image" alt="${item.productName}">
                <div class="cart-item-details">
                    <p class="cart-item-name">${item.productName}</p>
                    <p class="cart-item-price">Qty: ${item.quantity} | $${(item.price * item.quantity).toFixed(2)} | Size: ${item.size}</p>
                </div>
                <button onclick="removeCartItem(${index})" class="cart-remove-btn">x</button>
            </div>
        `;
        cartItemsContainer.appendChild(cartItem);
    });
}

    function updateCartCount() {
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = totalItems;
        cartCount.style.display = totalItems > 0 ? "inline" : "none";
    }

    window.removeCartItem = function (index) {
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartUI();
        updateCartCount();
    };

    updateCartUI();
    updateCartCount();
});
</script>