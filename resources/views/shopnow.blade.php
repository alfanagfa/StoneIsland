<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shop Now</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .navbar-brand img {
      height: 35px;
      margin-right: 10px;
    }
    .hero {
      background: url('https://www.stoneisland.com/on/demandware.static/-/Library-Sites-library-stone-global/default/dw1bb8056e/flp/Lab/MiConv.com__12Ap134-137_%E7%B9%A7%EF%BD%B9%E7%B9%9D%E5%8C%BB%E3%83%BB%E7%B9%9D%EF%BD%B3%E7%B9%A7%EF%BD%A2%E7%B9%A7%EF%BD%A4%E7%B9%9D%EF%BD%A9%E7%B9%9D%EF%BD%B3%E7%B9%9D%E5%8C%BB%EF%BD%99TU_p9.jpeg') center/cover no-repeat;
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
      font-size: 90%;
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
    .btn-kembali {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    width: 3.5rem;
    height: 3.5rem;
    font-size: 1.rem;
    font-weight: bold;
    color: white;
    background-color: #333;
    border: none;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    cursor: pointer;
    z-index: 1000;
    transition: background-color 0.3s ease, transform 0.2s ease;
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
        <li class="nav-item"><a class="nav-link" href="#">POLOS & T-SHIRTS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-content">
     <h1>FUNCTION AND PERFORMANCE <br>Jackets from the new Stone Island Stellina collection combine</br><br> functional silhouettes with innovative weather-resistant materials</br> <br> including 3L Gore-Tex Made with BIONIC Polyester Face and Skin</br> <br>Touch Nylon-TC,  making them ideal for transitional wear.</br></h1>
  </div>
</section>

<!-- Products -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">FULL OUTFITT</h2>
    <div class="row g-4">
      <!-- Product 1 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100054S00G2V0094_A/ppk73x/std/768x1024/4100054-skin-touch-nylon-tc_stone-island-stellina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 1"
               data-bs-toggle="modal" data-bs-target="#productModal1" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 1<br>$1,230.00</p>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100081S00G1V0062_A/ppk73x/std/768x1024/4100081-3l-gore-tex-made-with-bionic-polyester-face_stone-island-stellina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 2"
               data-bs-toggle="modal" data-bs-target="#productModal2" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 2<br>$1,305.00</p>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100028S00E1V0029_R/ppk73x/std/768x1024/3100028-scan-camo-on-stretch-ripstop-ovd,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 3"
               data-bs-toggle="modal" data-bs-target="#productModal3" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 3<br>$1,645.00</p>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100096S0069V0029_A/ppk73x/std/768x1024/4100096-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 4"
               data-bs-toggle="modal" data-bs-target="#productModal4" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 4<br>$1,505.00</p>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>

<!-- Products -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Product 5 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100034S00XAV0028_A/ppk73x/std/768x1024/5100034-cotton-linen-polyester-with-rubberised-effect_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 1"
               data-bs-toggle="modal" data-bs-target="#productModal5" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 5<br> $1,260.00</p>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100026S00X6V0020_R/ppk73x/std/768x1024/3100026-organic-cotton-tela_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 2"
               data-bs-toggle="modal" data-bs-target="#productModal6" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 6<br>$1,005.00</p>
          </div>
        </div>
      </div>

      <!-- Product 7 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100035S00XBV0093_A/ppk73x/std/768x1024/5100035-striped-soft-organic-cotton_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 3"
               data-bs-toggle="modal" data-bs-target="#productModal7" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 7<br>$1,745.00</p>
          </div>
        </div>
      </div>

      <!-- Product 8 -->
      <div class="col-6 col-md-3">
        <div class="card">
          <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152200004S00X8V0032_R/ppk73x/std/768x1024/2200004-organic-cotton-macro-pique_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="card-img-top" alt="Product 4"
               data-bs-toggle="modal" data-bs-target="#productModal8" style="cursor: pointer;">
          <div class="card-body text-center">
            <p class="card-text">Product 8<br>$1,205.00</p>
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
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100054S00G2V0094_A/ppk73x/std/768x1024/4100054-skin-touch-nylon-tc_stone-island-stellina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 1" />
        <p><strong>Harga:</strong> $1,230.00</p>
        <p>Jacket in a light, high-performance fabric with a thin wind- and water-resistant coating and a hood that can be packed into a pouch under the back of the collar. Garment dyed.</p>
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
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100081S00G1V0062_A/ppk73x/std/768x1024/4100081-3l-gore-tex-made-with-bionic-polyester-face_stone-island-stellina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 2" />
        <p><strong>Harga:</strong> $1,305.00</p>
        <p>Hooded jacket made from 3L Gore-Tex: the BIONIC polyester surface is bonded to a waterproof, windproof, and breathable membrane with internal protection mesh. Treated with anti-drop.</p>
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
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100028S00E1V0029_R/ppk73x/std/768x1024/3100028-scan-camo-on-stretch-ripstop-ovd,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 3" />
        <p><strong>Harga:</strong> $1,645.00</p>
        <p>Overshirt made from stretch cotton ripstop featuring a camouflage pigment print created from scans of Stone Island garments and other graphic elements. Overdyed with specific recipes.</p>
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
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100096S0069V0029_A/ppk73x/std/768x1024/4100096-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 4" />
        <p><strong>Harga:</strong> $1,505.00</p>
        <p>Hooded jacket made from an innovative nylon that is lighter and stronger than natural fabrics, featuring a marbled appearance. Garment dyed with an anti-drop agent.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 5 -->
<div class="modal fade" id="productModal5" tabindex="-1" aria-labelledby="productModal5Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal1Label">Product 5</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100034S00XAV0028_A/ppk73x/std/768x1024/5100034-cotton-linen-polyester-with-rubberised-effect_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 5" />
        <p><strong>Harga:</strong> $1,260.00</p>
        <p>Knit half-zipper sweater made from a cotton-linen-polyester blend that is heat pressed, melting the polyester yarn and creating a rubberized effect. Gauge 3.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 6 -->
<div class="modal fade" id="productModal6" tabindex="-1" aria-labelledby="productModal6Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal2Label">Product 6</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src=" https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100026S00X6V0020_R/ppk73x/std/768x1024/3100026-organic-cotton-tela_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 6" />
        <p><strong>Harga:</strong> $1,005.00</p>
        <p>Sweatpants made from organic cotton tela featuring Stone Island Marina embroidery, various pockets, drawstring cuffs, and elasticated waistband. Garment dyed.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 7 -->
<div class="modal fade" id="productModal7" tabindex="-1" aria-labelledby="productModal7Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal3Label">Product 7</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100035S00XBV0093_A/ppk73x/std/768x1024/5100035-striped-soft-organic-cotton_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 7" />
        <p><strong>Harga:</strong> $1,745.00</p>
        <p>Striped knit polo shirt made from soft organic cotton featuring a cotton canvas collar, one button at the neck, and Stone Island Marina lettering. Gauge 12.</p>
      </div>
    </div>
  </div>
</div>

<!-- Product Modal 8 -->
<div class="modal fade" id="productModal8" tabindex="-1" aria-labelledby="productModal8Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="productModal4Label">Product 8</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152200004S00X8V0032_R/ppk73x/std/768x1024/2200004-organic-cotton-macro-pique_stone-island-marina,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" class="img-fluid mb-3" alt="Product 8" />
        <p><strong>Harga:</strong> $1,205.00</p>
        <p>Short-sleeve polo shirt made from organic cotton macro piqué featuring two-snap fastening at the neck, chest pocket, and Stone Island Marina embroidery.</p>
      </div>
    </div>
  </div>
</div>

<button class="btn-kembali" onclick="history.back()" aria-label="Kembali">←</button>


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
