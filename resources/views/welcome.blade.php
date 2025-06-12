<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Stone Island Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .navbar-brand img {
      height: 35px;
      margin-right: 10px;
    }
    .hero {
      background: url('https://www.stoneisland.com/on/demandware.static/-/Library-Sites-library-stone-global/default/dw0bb9fe84/flp/Lab/DSCF0073_lighter.jpg') center/cover no-repeat;
      height: 90vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }
    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .footer {
      background-color: #111;
      color: #ddd;
      padding: 40px 0;
    }
    .footer a {
      color: #ddd;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://th.bing.com/th/id/OIP.URZLXkP7-8s9JcA0JYTF7QHaD4?w=312&h=180" alt="Logo" />
      <span class="fw-bold text-uppercase">Stone Island</span>
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="mainNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
        <li class="nav-item"><a class="nav-link" href="/men">Gifts</a></li>
        <li class="nav-item"><a class="nav-link" href="/fleecewear">fleecewear</a></li>
        <li class="nav-item"><a class="nav-link" href="/coll">View All</a></li>
        <li class="nav-item"><a class="nav-link" href="/POLOS">POLOS & T-SHIRTS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-content">
    <h1>New Season Arrivals</h1>
    <a href="/shopnow" class="btn btn-dark btn-lg text-uppercase">Shop Now</a>
  </div>
</section>

<!-- Products -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">New Arrivals</h2>
    <div class="row g-4">
      <!-- Product 1 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152200002S0070V0093_R/ppk73x/std/768x1024/2200002-502-organic-cotton-pique,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 1"
               data-bs-toggle="modal" data-bs-target="#productModal1" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 1<br>$550.00</p>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100029S00Z2V0028_A/ppk73x/std/768x1024/5100029-raw-hand-light-organic-cotton,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 2"
               data-bs-toggle="modal" data-bs-target="#productModal2" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 2<br>$455.00</p>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100015SA143V0061_R/ppk73x/std/768x1024/l100015-white-pigment-on-tela-paracadute-stretch-tc-pearl-grey-stone-island.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 3"
               data-bs-toggle="modal" data-bs-target="#productModal3" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 3<br>$645.00</p>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100008S00X1V0028_A/ppk73x/std/768x1024/g100008-aluminium-tela_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 4"
               data-bs-toggle="modal" data-bs-target="#productModal4" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 4<br>$905.00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modals for Products -->
<!-- Product Modal 1 -->
<div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal1Label">Product 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152200002S0070V0093_R/ppk73x/std/768x1024/2200002-502-organic-cotton-pique,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 1" />
        <p><strong>Harga:</strong> $550.00</p>
        <p>Jaket berbahan nilon berkualitas tinggi dengan desain tahan air dan potongan modern.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 2 -->
<div class="modal fade" id="productModal2" tabindex="-1" aria-labelledby="productModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal2Label">Product 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100029S00Z2V0028_A/ppk73x/std/768x1024/5100029-raw-hand-light-organic-cotton,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 2" />
        <p><strong>Harga:</strong> $455.00</p>
        <p>Kaos premium dengan print khas Stone Island, nyaman untuk pemakaian harian.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 3 -->
<div class="modal fade" id="productModal3" tabindex="-1" aria-labelledby="productModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal3Label">Product 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100015SA143V0061_R/ppk73x/std/768x1024/l100015-white-pigment-on-tela-paracadute-stretch-tc-pearl-grey-stone-island.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 3" />
        <p><strong>Harga:</strong> $645.00</p>
        <p>Sweater hangat dengan bahan fleece dan logo bordir ikonik di lengan.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 4 -->
<div class="modal fade" id="productModal4" tabindex="-1" aria-labelledby="productModal4Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal4Label">Product 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100008S00X1V0028_A/ppk73x/std/768x1024/g100008-aluminium-tela_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 4" />
        <p><strong>Harga:</strong> $905.00</p>
        <p>Celana panjang slim fit yang cocok untuk tampilan kasual maupun formal.</p>
      </div>
    </div>
  </div>
</div>

<!-- Fabric Section -->
<section class="bg-light py-5">
  <div class="container d-flex flex-wrap align-items-center">
    <div class="col-md-6 mb-3 mb-md-0">
      <h2>Innovative Fabric Technology</h2>
      <p>Stone Island is renowned for its use of exclusive materials and dyeing techniques to produce unique and durable pieces that blend function and fashion.</p>
    </div>
    <div class="col-md-6">
      <img src="https://th.bing.com/th/id/OIP.IVV---PPgEkpQY7rckWMMgHaEX?w=311&h=182" class="img-fluid rounded" alt="Fabric" />
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <div class="row mb-3">
      <div class="col-md-6">
        <h5>collection</h5>
        <ul class="list-unstyled">
          <li><a href="/men">Gifts</a></li>
          <li><a href="/coll">View All</a></li>
           <li><a href="/fleecewear">Fleecewear</a></li>
          <li><a href="/POLOS">POLOS & T-SHIRTS</a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <h5>Follow Us</h5>
        <ul class="list-unstyled">
          <li><a href="https://www.instagram.com/stoneisland?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a></li>
        </ul>
      </div>
    </div>
    <p class="mb-0">&copy; 2025 Stone Island. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
