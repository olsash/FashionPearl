document.addEventListener("DOMContentLoaded", function () {
    const cartIcon = document.getElementById("cart-icon");
    const cartCount = document.getElementById("cart-count");
    const cartSidebar = document.getElementById("cart-sidebar");
    const closeCart = document.getElementById("close-cart");
    const cartItemsContainer = document.getElementById("cart-items");
    const addToCartButton = document.getElementById("add-to-cart-button");
    const sizeButtons = document.querySelectorAll(".size-button");

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let selectedSize = null; // To track selected size

    // Handle size selection
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
