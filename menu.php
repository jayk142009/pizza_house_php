<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pizza House Menu</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet" />

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: #fff5f5;
      margin: 0;
    }

    .menu-header {
      padding: 1rem 1rem 0.5rem;
      background: #fff;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    
    .menu-title {
      color: #e03131;
      font-weight: 700;
      margin-bottom: 0;
    }

    .cart-badge {
      position: relative;
      font-size: 1.2rem;
    }
    .cart-badge .badge {
      position: absolute;
      top: -8px;
      right: -12px;
      background: #dc3545;
    }

    .menu-section {
      padding: 60px 15px;
    }

    .menu-card {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 40px rgba(0,0,0,0.04);
      transition: transform .3s, box-shadow .3s;
      background: #fff;
    }
    .menu-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 50px rgba(0,0,0,0.08);
    }
    .menu-card img {
      object-fit: cover;
      height: 180px;
      width: 100%;
    }
    .card-title {
      font-weight: 700;
      margin-bottom: .5rem;
    }
    .price {
      font-size: 1.1rem;
      color: #e03131;
      font-weight: 600;
    }
    .btn-add, .btn-order {
      border-radius: 50px;
      padding: 8px 16px;
      font-weight: 600;
      transition: .25s;
    }
    .btn-add {
      background: linear-gradient(45deg,#ff6b00,#e03131);
      color: #fff;
      border: none;
    }
    .btn-add:hover {
      background: linear-gradient(45deg,#e03131,#ff6b00);
    }
    .btn-order {
      background: transparent;
      border: 2px solid #e03131;
      color: #e03131;
      margin-left: .5rem;
    }
    .btn-order:hover {
      background: #e03131;
      color: #fff;
    }

    .badge-count {
      background: #fff;
      color: #e03131;
      font-size: 0.8rem;
      padding: 4px 8px;
      border-radius: 50px;
      margin-left: 6px;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <?php include "nev.php" ?>
  <!-- MENU HEADER -->
  <div class="menu-header d-flex justify-content-between align-items-center container">
    <div>
      <h2 class="menu-title mb-0">Our Pizza Menu</h2>
      <small class="text-muted">Hot, fresh & delivered fast</small>
    </div>
    <div>
      <a href="#cart" class="text-decoration-none position-relative text-dark">
        <i class="fa-solid fa-cart-shopping fa-lg"></i>
        <span id="cartCount" class="badge bg-danger rounded-pill" style="font-size:0.65rem;">0</span>
      </a>
    </div>
  </div>

  <!-- MENU GRID -->
  <section class="menu-section">
    <div class="container">
      <div class="row g-4">
        <!-- Repeat this block for each pizza -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,pepperoni" alt="Pepperoni Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Pepperoni Pizza</h5>
              <p class="price">₹299</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="1" data-name="Pepperoni Pizza" data-price="299">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Cheese Burst -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,cheese" alt="Cheese Burst">
            <div class="card-body text-center">
              <h5 class="card-title">Cheese Burst</h5>
              <p class="price">₹349</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="2" data-name="Cheese Burst" data-price="349">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Veggie Supreme -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,veggie" alt="Veggie Supreme">
            <div class="card-body text-center">
              <h5 class="card-title">Veggie Supreme</h5>
              <p class="price">₹269</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="3" data-name="Veggie Supreme" data-price="269">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- BBQ Chicken -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,bbq" alt="BBQ Chicken">
            <div class="card-body text-center">
              <h5 class="card-title">BBQ Chicken</h5>
              <p class="price">₹379</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="4" data-name="BBQ Chicken" data-price="379">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Hawaiian Pizza -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,hawaiian" alt="Hawaiian Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Hawaiian Pizza</h5>
              <p class="price">₹319</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="5" data-name="Hawaiian Pizza" data-price="319">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Margherita -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,margherita" alt="Margherita">
            <div class="card-body text-center">
              <h5 class="card-title">Margherita</h5>
              <p class="price">₹199</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="6" data-name="Margherita" data-price="199">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Italian Pizza -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,italian" alt="Italian Pizza">
            <div class="card-body text-center">
              <h5 class="card-title">Italian Pizza</h5>
              <p class="price">₹359</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="7" data-name="Italian Pizza" data-price="359">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Tandoori Paneer -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,tandoori" alt="Tandoori Paneer">
            <div class="card-body text-center">
              <h5 class="card-title">Tandoori Paneer</h5>
              <p class="price">₹289</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="8" data-name="Tandoori Paneer" data-price="289">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Mexican Green Wave -->
        <div class="col-md-4">
          <div class="card menu-card">
            <img src="https://source.unsplash.com/300x200/?pizza,mexican" alt="Mexican Green Wave">
            <div class="card-body text-center">
              <h5 class="card-title">Mexican Green Wave</h5>
              <p class="price">₹329</p>
              <div class="d-flex justify-content-center flex-wrap gap-2 mt-2">
                <button class="btn btn-add" data-id="9" data-name="Mexican Green Wave" data-price="329">Add to Cart</button>
                <button class="btn btn-order" onclick="location.href='#order'">Order</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Optional Cart Summary Modal/Section -->
  <div class="container mb-5" id="cart">
    <div class="mt-4">
      <h4>Cart Summary <span id="summaryCount" class="badge bg-danger"></span></h4>
      <div id="cartItems"></div>
      <div class="d-flex justify-content-between align-items-center mt-3">
        <div><strong>Total:</strong> <span id="cartTotal">₹0</span></div>
        <button class="btn btn-order" onclick="checkout()">Checkout</button>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    const cartKey = 'pizzaHouseCart';

    function loadCart() {
      const stored = localStorage.getItem(cartKey);
      return stored ? JSON.parse(stored) : {};
    }

    function saveCart(cart) {
      localStorage.setItem(cartKey, JSON.stringify(cart));
    }

    function updateBadge() {
      const cart = loadCart();
      let count = 0;
      for (const id in cart) count += cart[id].qty;
      document.getElementById('cartCount').textContent = count;
      document.getElementById('summaryCount').textContent = count;
    }

    function renderCart() {
      const cart = loadCart();
      const container = document.getElementById('cartItems');
      container.innerHTML = '';
      let total = 0;
      for (const id in cart) {
        const item = cart[id];
        const subtotal = item.price * item.qty;
        total += subtotal;

        const row = document.createElement('div');
        row.className = 'd-flex justify-content-between align-items-center border rounded p-2 mb-2 bg-white';
        row.innerHTML = `
          <div>
            <strong>${item.name}</strong> <small class="text-muted">x${item.qty}</small><br>
            <small>₹${item.price} each</small>
          </div>
          <div class="text-end">
            <div>₹${subtotal}</div>
            <div class="mt-1">
              <button class="btn btn-sm btn-outline-secondary me-1" onclick="changeQty(${id}, -1)">-</button>
              <button class="btn btn-sm btn-outline-secondary" onclick="changeQty(${id}, 1)">+</button>
              <button class="btn btn-sm btn-outline-danger ms-2" onclick="removeItem(${id})">Remove</button>
            </div>
          </div>
        `;
        container.appendChild(row);
      }
      document.getElementById('cartTotal').textContent = '₹' + total;
    }

    function addToCart(id, name, price) {
      const cart = loadCart();
      if (!cart[id]) cart[id] = { name, price: +price, qty: 0 };
      cart[id].qty += 1;
      saveCart(cart);
      updateBadge();
      renderCart();
    }

    function changeQty(id, delta) {
      const cart = loadCart();
      if (!cart[id]) return;
      cart[id].qty = Math.max(1, cart[id].qty + delta);
      saveCart(cart);
      updateBadge();
      renderCart();
    }

    function removeItem(id) {
      const cart = loadCart();
      if (cart[id]) {
        delete cart[id];
        saveCart(cart);
      }
      updateBadge();
      renderCart();
    }

    function checkout() {
      alert('Proceeding to checkout. Total: ' + document.getElementById('cartTotal').textContent);
    }

    document.addEventListener('DOMContentLoaded', () => {
      // Attach add-to-cart handlers
      document.querySelectorAll('.btn-add').forEach(btn => {
        btn.addEventListener('click', () => {
          addToCart(btn.dataset.id, btn.dataset.name, btn.dataset.price);
        });
      });
      updateBadge();
      renderCart();
    });
  </script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
