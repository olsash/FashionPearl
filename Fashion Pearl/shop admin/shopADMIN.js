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


let products = {
data: [
  {
    productName: "Dark Wide-Leg Jeans",
    category: "Women",
    collections: "Jeans",
    price: 30.88,
    image: "../foto/1.jpg",
  },
  {
    productName: "Black Acid-Washed Jeans ",
    category: "Men",
    collections: "Jeans",
    price: 32.59,
    image: "../foto/2.jpg",
  },
  {
    productName: "Butterfly Sweater",
    category: "Men",
    collections: "Sweater",
    price: 42.68,
    image: "../foto/3.jpg",
  },
  {
    productName: "Pink Elegant Watch",
    category: "Accesories",
    collections: "Watch",
    price: 65.55,
    image: "../foto/4.jpg",
  },
  {
    productName: "Silver Star Necklace",
    category: "Accesories",
    collections: "Necklace",
    price: 110.22,
    image: "../foto/5.jpg",
  },
  {
    productName: "Black Mini Dress",
    category: "Women",
    collections: "Dress",
    price: 31.42,
    image: "../foto/6.jpg",
  },
  {
    productName: "Black Knee-High Boots",
    category: "Women",
    collections: "Shoes",
    price: 98.63,
    image: "../foto/7.jpg",
  },
  {
    productName: "Black Prada Handbag",
    category: "Women",
    collections: "Bags",
    price: 120.65,
    image: "../foto/8.jpg",
  },
  {
    productName: "Faded Dark Denim",
    category: "Women",
    collections: "Jeans",
    price: 34.59,
    image: "../foto/9.jpg",
  },
  {
    productName: "Black Star-Embroidered Jeans",
    category: "Women",
    collections: "Jeans",
    price: 28.68,
    image: "../foto/10.jpg",
  },
  {
    productName: "Patchwork Star Jeans",
    category: "Women",
    collections: "Jeans",
    price: 29.99,
    image: "../foto/11.jpg",
  },
  {
    productName: "Chain Detail Denim",
    category: "Women",
    collections: "Jeans",
    price: 33.22,
    image: "../foto/12.jpg",
  },
  {
    productName: "White Ruched Halter Top",
    category: "Women",
    collections: "Tops",
    price: 17.42,
    image: "../foto/13.jpg",
  },
  {
    productName: "Dark Denim Halter Tops",
    category: "Women",
    collections: "Tops",
    price: 16.63,
    image: "../foto/14.jpg",
  },
  {
    productName: "Black and White Midi Skirt",
    category: "Women",
    collections: "Skirt",
    price: 22.65,
    image: "../foto/15.jpg",
  },
  {
    productName: "Black Studded Belt",
    category: "Accesories",
    collections: "Belt",
    price: 8.59,
    image: "../foto/16.jpg",
  },
  {
    productName: "Black Beanie with Logo",
    category: "Men",
    collections: "Hat",
    price: 15.68,
    image: "../foto/17.jpg",
  },
  {
    productName: "Black Beanie Vivienne Westwood",
    category: "Men",
    collections: "Hat",
    price: 58.55,
    image: "../foto/18.jpg",
  },
  {
    productName: "Distressed Black Cap",
    category: "Men",
    collections: "Hat",
    price: 19.22,
    image: "../foto/19.jpg",
  },
  {
    productName: "Disel White Cap",
    category: "Men",
    collections: "Hat",
    price: 45.42,
    image: "../foto/20.jpg",
  },
  {
    productName: "Gray Washed Cap Star",
    category: "Men",
    collections: "Hat",
    price: 21.63,
    image: "../foto/21.jpg",
  },
  {
    productName: "Black Acid-Washed Jeans",
    category: "Men",
    collections: "Jeans",
    price: 35.65,
    image: "../foto/22.jpg",
  },
  {
    productName: "Spiderweb Ring",
    category: "Acessories",
    collections: "Ring",
    price: 32.59,
    image: "../foto/23.jpg",
  },
  {
    productName: "Silver Chain Necklace",
    category: "Acessories",
    collections: "Necklace",
    price: 42.68,
    image: "../foto/24.jpg",
  },
  {
    productName: "Black Jeans with Stitching",
    category: "Men",
    collections: "Jeans",
    price: 37.55,
    image: "../foto/25.jpg",
  },
  {
    productName: "Red Text and Illustration Tee",
    category: "Women",
    collections: "T-Shirt",
    price: 32.22,
    image: "../foto/26.jpg",
  },
  {
    productName: "Spider Graphic Tee",
    category: "Men",
    collections: "T-Shirt",
    price: 35.42,
    image: "../foto/27.jpg",
  },
  {
    productName: "Surreal Face Graphic Tee",
    category: "Women",
    collections: "TShirt",
    price: 32.63,
    image: "../foto/28.jpg",
  },
  {
    productName: "Silver Necklace with Butterfly Pendant",
    category: "Acessories",
    collections: "Necklace",
    price: 120.65,
    image: "../foto/29.jpg",
  },
  {
    productName: "Bow Pendant Necklace",
    category: "Acessories",
    collections: "Necklace",
    price: 112.59,
    image: "../foto/30.jpg",
  },
  {
    productName: "Silver Choker with Butterfly",
    category: "Acessories",
    collections: "Necklace",
    price: 143.68,
    image: "../foto/31.jpg",
  },
  {
    productName: "Pink Floral Handbag with 3D Flowers",
    category: "Women",
    collections: "Bags",
    price: 65.55,
    image: "../foto/32.jpg",
  },
  {
    productName: "Navy Star Wristlet by Kate Spade",
    category: "Accesories",
    collections: "Wallet",
    price: 98.22,
    image: "../foto/33.jpg",
  },
  {
    productName: "White Mini Shoulder Bag",
    category: "Women",
    collections: "Bag",
    price: 32.42,
    image: "../foto/34.jpg",
  },
  {
    productName: "Silver Rectangular Face Watch",
    category: "Acessories",
    collections: "Watch",
    price: 102.63,
    image: "../foto/35.jpg",
  },
  {
    productName: "Vivienne Westwood Black Croc Leather",
    category: "Acessories",
    collections: "Wallet",
    price: 89.65,
    image: "../foto/36.jpg",
  },
  {
    productName: "YSL Black Croc Card Holder",
    category: "Acessories",
    collections: "Wallet",
    price: 32.59,
    image: "../foto/37.jpg",
  },
  {
    productName: "Leopard Print Card Case",
    category: "Acessories",
    collections: "Wallet",
    price: 26.68,
    image: "../foto/38.jpg",
  },
  {
    productName: "Black Sunglasses with Crystal",
    category: "Accesories",
    collections: "Sunnglasses",
    price: 22.55,
    image: "../foto/39.jpg",
  },
  {
    productName: "Black Sunglasses with Star",
    category: "Accesories",
    collections: "Sunnglasses",
    price: 25.22,
    image: "../foto/40.jpg",
  },
  {
    productName: "Silver Charm Bracelet Watch",
    category: "Accesories",
    collections: "Watch",
    price: 56.42,
    image: "../foto/42.jpg",
  },
  {
    productName: "Small Silver Watch with Bracelet Strap",
    category: "Accesories",
    collections: "Watch",
    price: 74.65,
    image: "../foto/43.jpg",
  },
  {
    productName: "Silver Bow Earrings",
    category: "Accesories",
    collections: "Earrings",
    price: 66.59,
    image: "../foto/44.jpg",
  },
  {
    productName: "Silver Vivienne Westwood Earrings",
    category: "Accesories",
    collections: "Earrings",
    price: 59.68,
    image: "../foto/45.jpg",
  },
  {
    productName: "Pearl Vivienne Westwood Necklace",
    category: "Accesories",
    collections: "Necklace",
    price: 178.55,
    image: "../foto/46.jpg",
  },
  {
    productName: "Pink Gemstone Ring",
    category: "Accesories",
    collections: "Ring",
    price: 48.22,
    image: "../foto/47.jpg",
  },
  {
    productName: "Silver Bracelet with Butterfly Design",
    category: "Accesories",
    collections: "Ring",
    price: 31.42,
    image: "../foto/48.jpg",
  },
  {
    productName: "Silver Necklace with Butterfly Pendant",
    category: "Accesories",
    collections: "Necklace",
    price: 98.63,
    image: "../foto/49.jpg",
  },
  {
    productName: "Mask Graphic Tee",
    category: "Women",
    collections: "TShirt",
    price: 26.65,
    image: "../foto/50.jpg",
  },
  {
    productName: "Skull Graphic Tee",
    category: "Men",
    collections: "TShirt",
    price: 32.59,
    image: "../foto/51.jpg",
  },
  {
    productName: "T-Shirt with Pink Glow",
    category: "Men",
    collections: "TShirt",
    price: 26.68,
    image: "../foto/52.jpg",
  },
  {
    productName: "Cat Knit Sweater",
    category: "Men",
    collections: "Sweater",
    price: 32.55,
    image: "../foto/53.jpg",
  },
  {
    productName: "Star Pattern Sweater",
    category: "Men",
    collections: "Sweater",
    price: 30.22,
    image: "../foto/54.jpg",
  },
  {
    productName: "Blue Sweater with Black Print",
    category: "Men",
    collections: "Sweater",
    price: 31.42,
    image: "../foto/55.jpg",
  },
  {
    productName: "Gray Ombre Sweater",
    category: "Men",
    collections: "Sweater",
    price: 32.63,
    image: "../foto/56.jpg",
  },
  {
    productName: "Flame Knit Sweater",
    category: "Men",
    collections: "Sweater",
    price: 31.65,
    image: "../foto/57.jpg",
  },
  {
    productName: "Glasses with Pink Bow",
    category: "Accesories",
    collections: "Sunnglasses",
    price: 32.59,
    image: "../foto/58.jpg",
  },
  {
    productName: "Purple Glasses with Star",
    category: "Accesories",
    collections: "Sunnglasses",
    price: 42.68,
    image: "../foto/59.jpg",
  },
  {
    productName: "Burgundy with Croc Wallet",
    category: "Accesories",
    collections: "Wallet",
    price: 65.55,
    image: "../foto/60.jpg",
  },
  {
    productName: "Burgundy Quilted YSL Wallet",
    category: "Accesories",
    collections: "Wallet",
    price: 41.22,
    image: "../foto/62.jpg",
  },
  {
    productName: "Brown Monogram Dior Wallet",
    category: "Accesories",
    collections: "Wallet",
    price: 165.63,
    image: "../foto/63.jpg",
  },
  {
    productName: "Dark Brown Vivienne Westwood",
    category: "Accesories",
    collections: "Wallet",
    price: 31.65,
    image: "../foto/64.jpg",
  },
  {
    productName: "Classic Brown Leather Watch",
    category: "Accesories",
    collections: "Watch",
    price: 34.59,
    image: "../foto/65.jpg",
  },
  {
    productName: "Melting Clock-Inspired Watch",
    category: "Accesories",
    collections: "Watch",
    price: 42.68,
    image: "../foto/66.jpg",
  },
  {
    productName: "Monogram Dior Saddle Bag",
    category: "Accesories",
    collections: "Bags",
    price: 65.55,
    image: "../foto/67.jpg",
  },
  {
    productName: "Black Ruched Shoulder Bag",
    category: "Accesories",
    collections: "Bags",
    price: 75.22,
    image: "../foto/68.jpg",
  },
  {
    productName: "Dark Brown Structured Handbag",
    category: "Women",
    collections: "Bags",
    price: 31.42,
    image: "../foto/69.jpg",
  },
  {
    productName: "Burgendy Prada Mini Shoulder Bag",
    category: "Women",
    collections: "Bags",
    price: 54.63,
    image: "../foto/70.jpg",
  },
  {
    productName: "Shiny Black Handbag",
    category: "Women",
    collections: "Bags",
    price: 48.65,
    image: "../foto/71.jpg",
  },
  {
    productName: "Black Shoulder Bag with Bow",
    category: "Acessories",
    collections: "Bags",
    price: 42.59,
    image: "../foto/72.jpg",
  },
  {
    productName: "Black Shoulder Bag with Gold Accent",
    category: "Acessories",
    collections: "Bags",
    price: 31.68,
    image: "../foto/73.jpg",
  },
  {
    productName: "Black & White Pointed Slingback Heels",
    category: "Accesories",
    collections: "Bags",
    price: 26.55,
    image: "../foto/74.jpg",
  },
  {
    productName: "Pastel Blue Strap Heels",
    category: "Women",
    collections: "Shoes",
    price: 52.22,
    image: "../foto/75.jpg",
  },
  {
    productName: "Black Slingback Heels",
    category: "Women",
    collections: "Shoes",
    price: 31.42,
    image: "../foto/76.jpg",
  },
  {
    productName: "Lace-Detail Brown Pointed Heels",
    category: "Women",
    collections: "Shoes",
    price: 62.63,
    image: "../foto/77.jpg",
  },
  {
    productName: "Glossy Black Pointed Lace-Up Heels",
    category: "Women",
    collections: "Shoes",
    price: 34.65,
    image: "../foto/78.jpg",
  },
  {
    productName: "Cream Lace Flats",
    category: "Women",
    collections: "Shoes",
    price: 32.59,
    image: "../foto/79.jpg",
  },
  {
    productName: "Black Lace Flats with Bow",
    category: "Women",
    collections: "Shoes",
    price: 42.68,
    image: "../foto/80.jpg",
  },
  {
    productName: "Burgundy Loafers with Bow Accent",
    category: "Women",
    collections: "Shoes",
    price: 36.55,
    image: "../foto/81.jpg",
  },
  {
    productName: "Dark Denim Shorts with Straps",
    category: "Accesories",
    collections: "Jeans",
    price: 32.22,
    image: "../foto/82.jpg",
  },
  {
    productName: "Star Distressed Denim Mini Skirt",
    category: "Women",
    collections: "Skirt",
    price: 31.42,
    image: "../foto/83.jpg",
  },
  {
    productName: "Black Ruched Skirt with Star Detail",
    category: "Women",
    collections: "Skirt",
    price: 33.63,
    image: "../foto/84.jpg",
  },
  {
    productName: "Green Wrap Skirt with Bow",
    category: "Women",
    collections: "Skirt",
    price: 25.65,
    image: "../foto/85.jpg",
  },
  {
    productName: "Pleated Gray Mini Skirt with Side Tie",
    category: "Women",
    collections: "Skirt",
    price: 32.59,
    image: "../foto/86.jpg",
  },
  {
    productName: "Dark Gray Pleated Wrap Skirt",
    category: "Women",
    collections: "Skirt",
    price: 28.68,
    image: "../foto/87.jpg",
  },
  {
    productName: "Faded Denim Mini Skirt with Studs",
    category: "Women",
    collections: "Skirt",
    price: 34.55,
    image: "../foto/88.jpg",
  },
  {
    productName: "Brown Leather Mini Skirt with Belt",
    category: "Women",
    collections: "Skirt",
    price: 23.22,
    image: "../foto/89.jpg",
  },
  {
    productName: "Distressed Denim Belted Mini Skirt",
    category: "Women",
    collections: "Skirt",
    price: 31.42,
    image: "../foto/90.jpg",
  },
  {
    productName: "Denim Mini Skirt with Buckle",
    category: "Women",
    collections: "Skirt",
    price: 22.63,
    image: "../foto/91.jpg",
  },
  {
    productName: "Black Bell-Sleeve Mini Dress",
    category: "Women",
    collections: "Dress",
    price: 35.65,
    image: "../foto/92.jpg",
  },
  {
    productName: "Black Layered Mini Dress",
    category: "Women",
    collections: "Dress",
    price: 32.59,
    image: "../foto/93.jpg",
  },
  {
    productName: "Black Corset Dress",
    category: "Women",
    collections: "Dress",
    price: 42.68,
    image: "../foto/95.jpg",
  },
  {
    productName: "Black Bow-Tie Dress",
    category: "Women",
    collections: "Dress",
    price: 32.55,
    image: "../foto/94.jpg",
  },
  {
    productName: "Black Halter Embellished Top",
    category: "Women",
    collections: "Tops",
    price: 26.22,
    image: "../foto/96.jpg",
  },
  {
    productName: "Black Tube Top with Star Rhinestones",
    category: "Women",
    collections: "Tops",
    price: 31.42,
    image: "../foto/97.jpg",
  },
  {
    productName: "Denim Corset Top",
    category: "Women",
    collections: "Tops",
    price: 32.63,
    image: "../foto/99.jpg",
  },
  {
    productName: "Dark Gray Zipper Corset",
    category: "Women",
    collections: "Tops",
    price: 22.65,
    image: "../foto/100.jpg",
  },
  {
    productName: "Black Acid-Washed Jeans ",
    category: "Men",
    collections: "Jeans",
    price: 32.59,
    image: "../foto/101.jpg",
  },
  {
    productName: "Disel Mini Top",
    category: "Women",
    collections: "Tops",
    price: 204.55,
    image: "../foto/102.jpg",
  },
  {
    productName: "Burgundy Ruched Sleeveless Top",
    category: "Women",
    collections: "Tops",
    price: 25.22,
    image: "../foto/103.jpg",
  },
  {
    productName: "Burgundy Fitted Sleeveless Top",
    category: "Women",
    collections: "Tops",
    price: 21.42,
    image: "../foto/104.jpg",
  },
  {
    productName: "Pink Feathered Crop Top",
    category: "Women",
    collections: "Tops",
    price: 35.63,
    image: "../foto/105.jpg",
  },
  
],
};
  

for (let i of products.data) {
  let card = document.createElement("div");
  card.classList.add("card", i.category, i.collections, "All");

  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");

  let productLink = document.createElement("a");
  productLink.href = `productDetails.php?name=${encodeURIComponent(i.productName)}&price=${i.price}&image=${encodeURIComponent(i.image)}`;
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
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);

  let price = document.createElement("h6");
  price.innerText = i.price + "€";
  container.appendChild(price);

  let addToCartIcon = document.createElement("div");
  addToCartIcon.classList.add("add-to-cart-icon");
  addToCartIcon.innerHTML = `<ion-icon name="cart-outline"></ion-icon>`;
  addToCartIcon.addEventListener("click", () => {
    alert(`${i.productName} added to cart!`);
  });

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}


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

window.onload = () => {
    filterProduct("All");
    };
    
    