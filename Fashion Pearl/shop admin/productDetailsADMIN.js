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