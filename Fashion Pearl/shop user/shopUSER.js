class Auth {
  static checkLogin() {
      fetch('../profile/checkLogin.php')
          .then(response => response.json())
          .then(data => {
              if (data.loggedIn) {
                  Sidebar.open();
              } else {
                  window.location.href = '../login/login.php';
              }
          })
          .catch(error => console.error('Error checking login:', error));
  }
}
document.querySelectorAll('.filter-toggle').forEach(toggle => {
  toggle.addEventListener('click', () => {
      toggle.classList.toggle('active');
  });
});

class Sidebar {
  static open() {
      document.getElementById('sidebar').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';

      fetch('../profile/profile.php')
          .then(response => response.text())
          .then(data => {
              document.getElementById('sidebar').innerHTML = data;
          })
          .catch(error => console.error('Error loading sidebar:', error));
  }

  static close() {
      document.getElementById('sidebar').style.display = 'none';
      document.getElementById('overlay').style.display = 'none';
  }
}

class ProductManager {
  static fetchProducts() {
      fetch("../shop admin/fetchProducts.php")
          .then(response => response.json())
          .then(products => {
              products.data.forEach(product => {
                  ProductManager.createProductCard(product);
              });
          })
          .catch(error => console.error('Error fetching products:', error));
  }

  static createProductCard(product) {
      let card = document.createElement("div");
      card.classList.add("card", product.category, product.collections, "All");

      let imgContainer = document.createElement("div");
      imgContainer.classList.add("image-container");

      let productLink = document.createElement("a");
      productLink.href = `productDetailsADMIN.php?name=${encodeURIComponent(product.product_name)}&price=${product.price}&image=${encodeURIComponent(product.image)}`;
      productLink.classList.add("product-link");

      let image = document.createElement("img");
      image.setAttribute("src", product.image);
      imgContainer.appendChild(image);
      productLink.appendChild(imgContainer);
      card.appendChild(productLink);

      let container = document.createElement("div");
      container.classList.add("container");

      let name = document.createElement("h5");
      name.classList.add("product-name");
      name.innerText = product.product_name.toUpperCase();
      container.appendChild(name);

      let price = document.createElement("h6");
      price.innerText = product.price + "€";
      container.appendChild(price);

      card.appendChild(container);
      document.getElementById("products").appendChild(card);
      
  }
}

class Filter {
  static filterProduct(value) {
      let elements = document.querySelectorAll(".card");
      elements.forEach((element) => {
          const price = parseInt(element.querySelector("h6").innerText.replace("€", ""));
          let show = false;

          if (value.includes("-")) {
              const [min, max] = value.split("-").map(v => v === "more" ? Infinity : parseInt(v));
              show = price >= min && price <= max;
          } else if (value === "All" || element.classList.contains(value)) {
              show = true;
          }

          element.classList.toggle("hide", !show);
      });
      if (button.getAttribute('data-category') === value) {
        button.classList.add("active");
        console.log("Button activated:", button.getAttribute('data-category'));
      }
    
  }
}


class Search {
  static toggle() {
      let searchInput = document.getElementById("search-input");
      searchInput.classList.toggle("hidden");
      searchInput.classList.toggle("visible");
      searchInput.focus();
  }

  static perform() {
      let searchQuery = document.getElementById("search-input").value.toUpperCase();
      let elements = document.querySelectorAll(".product-name");
      let cards = document.querySelectorAll(".card");

      elements.forEach((element, index) => {
          cards[index].classList.toggle("hide", !element.innerText.includes(searchQuery));
      });
  }
}

document.getElementById("search-icon").addEventListener("click", Search.toggle);
document.getElementById("search-input").addEventListener("input", Search.perform);



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
  
  function calculateTotalPrice() {
    let totalPrice = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    return totalPrice.toFixed(2); 
  }
  
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
                    <p class="cart-item-price">Qty: ${item.quantity} | ${(item.price * item.quantity).toFixed(2)}€ | Size: ${item.size}</p>
                </div>
                <button onclick="removeCartItem(${index})" class="cart-remove-btn">x</button>
            </div>
        `;
        cartItemsContainer.appendChild(cartItem);
    });
  
    const totalPrice = calculateTotalPrice();
    const totalPriceContainer = document.getElementById("total-price-container");
    totalPriceContainer.innerHTML = `
        <p>Total: ${totalPrice}€</p>
    `;
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