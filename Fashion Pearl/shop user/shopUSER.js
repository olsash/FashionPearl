
function checkLogin() {
  fetch('../profile/checkLogin.php')
      .then(response => response.json())
      .then(data => {
          if (data.loggedIn) {
              openSidebar();
          } else {
              window.location.href = '../login/login.php';
          }
      })
      .catch(error => console.error('Gabim gjatë kontrollit të login:', error));
}


function openSidebar() {
    document.getElementById('sidebar').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';

    fetch('../profile/profile.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('sidebar').innerHTML = data;
      })
      .catch(error => console.error('Error loading sidebar:', error));
  }

  function closeSidebar() {
    document.getElementById('sidebar').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }


  document.querySelectorAll('.filter-toggle').forEach(toggle => {
          toggle.addEventListener('click', () => {
              toggle.classList.toggle('active');
          });
      });


      fetch("../shop admin/fetchProducts.php")
      .then(response => response.json())
      .then(products => {
        products.data.forEach(i => {
          let card = document.createElement("div");
          card.classList.add("card", i.category, i.collections, "All");

          let imgContainer = document.createElement("div");
          imgContainer.classList.add("image-container");

          let productLink = document.createElement("a");
          productLink.href = `productDetailsUSER.php?name=${encodeURIComponent(i.product_name)}&price=${i.price}&image=${encodeURIComponent(i.image)}`;
          productLink.classList.add("product-link");

          let image = document.createElement("img");
          image.setAttribute("src", i.image);
          imgContainer.appendChild(image);
          productLink.appendChild(imgContainer);
          card.appendChild(productLink);

          let container = document.createElement("div");
          container.classList.add("container");

          let name = document.createElement("h5");
          name.classList.add("product-name");
          name.innerText = i.product_name.toUpperCase();
          container.appendChild(name);

          let price = document.createElement("h6");
          price.innerText = i.price + "€";
          container.appendChild(price);

          let addToCartIcon = document.createElement("div");
          addToCartIcon.classList.add("add-to-cart-icon");
          addToCartIcon.innerHTML = `<ion-icon name="cart-outline"></ion-icon>`;
          addToCartIcon.addEventListener("click", () => {
            alert(`${i.product_name} added to cart!`);
          });

          card.appendChild(container);
          document.getElementById("products").appendChild(card);
        });
      });


function filterProduct(value) {
let buttons = document.querySelectorAll(".button-value");
buttons.forEach((button) => {
  if (value.toUpperCase() == button.innerText.toUpperCase()) {
    button.classList.add("active");
  } else {
    button.classList.remove("active");
  }
});

let elements = document.querySelectorAll(".card");
elements.forEach((element) => {
  const price = parseInt(element.querySelector("h6").innerText.replace("€", ""));
  let show = false;

  if (value.includes("-")) {
    const [min, max] = value.split("-").map((v) => (v === "more" ? Infinity : parseInt(v)));
    if (price >= min && price <= max) {
      show = true;
    }
  }
  else if (value == "All" || element.classList.contains(value)) {
    show = true;
  }

  if (show) {
    element.classList.remove("hide");
  } else {
    element.classList.add("hide");
  }
});
}


document.getElementById("search-icon").addEventListener("click", () => {
  const searchInput = document.getElementById("search-input");
  if (searchInput.classList.contains("hidden")) {
    searchInput.classList.remove("hidden");
    searchInput.classList.add("visible");
    searchInput.focus();
  } else {
    searchInput.classList.add("hidden");
    searchInput.classList.remove("visible");
  }
});

document.getElementById("search-icon").addEventListener("click", () => {
let searchInput = document.getElementById("search-input").value;
let elements = document.querySelectorAll(".product-name");
let cards = document.querySelectorAll(".card");

elements.forEach((element, index) => {
  if (element.innerText.includes(searchInput.toUpperCase())) {
    cards[index].classList.remove("hide");
  } else {
    cards[index].classList.add("hide");
  }
});
});


window.onload = () => {
filterProduct("All");
};
document.addEventListener("DOMContentLoaded", function () {
  const cartIcon = document.getElementById("cart-icon");
  const cartCount = document.getElementById("cart-count");
  const cartSidebar = document.getElementById("cart-sidebar");
  const closeCart = document.getElementById("close-cart");
  const cartItemsContainer = document.getElementById("cart-items");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  function updateCartCount() {
      const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
      
      if (totalItems > 0) {
          cartCount.textContent = totalItems;
          cartCount.style.display = "inline"; 
      } else {
          cartCount.style.display = "none"; 
      }
  }

  function updateCartUI() {
      cartItemsContainer.innerHTML = "";
      cart.forEach((item, index) => {
          const cartItem = document.createElement("div");
          cartItem.classList.add("cart-item");
          cartItem.innerHTML = `
              <div class="cart-item-content">
                  <img src="${item.image}" class="cart-item-image" alt="${item.productName}"> <!-- Image on the left -->
                  <div class="cart-item-details">
                      <p class="cart-item-name">${item.productName}</p>
                      <p class="cart-item-price">Qty: ${item.quantity} | $${(item.price * item.quantity).toFixed(2)} | Size: ${item.size || 'N/A'}</p>
                  </div>
                  <button onclick="removeCartItem(${index})" class="cart-remove-btn">x</button> <!-- Remove button on the right -->
              </div>
          `;
          cartItemsContainer.appendChild(cartItem);
      });
  }

  document.getElementById("cart-icon").addEventListener("click", function() {
      document.getElementById("cart-sidebar").classList.toggle("open");
  });

  document.getElementById("close-cart").addEventListener("click", function() {
      document.getElementById("cart-sidebar").classList.remove("open");
  });

  window.removeCartItem = function (index) {
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCartUI();
      updateCartCount();
  };

  updateCartUI();
  updateCartCount();
});