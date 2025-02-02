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