<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fleecewear</title>
  <style>
      body { font-family: sans-serif; margin:0; padding:0; }
    .container { display:flex; max-width:1200px; margin:0 auto; padding:20px; }
    .sidebar { width:250px; padding-right:20px; }
    .sidebar h3 { margin-bottom:10px; font-size:1.1rem; text-transform:uppercase; }
    .sidebar ul { list-style:none; padding:0; margin-bottom:30px; }
    .sidebar li { margin-bottom:8px; }
    .sidebar label { font-size:0.9rem; }
    .products { flex:1; display:grid; grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:20px; }
    .card { background:#fff; border:1px solid #ddd; border-radius:6px; overflow:hidden; cursor:pointer; }
    .card img { width:100%; display:block; }
    .card .info { padding:10px; }
    .card .info h4 { margin:0 0 5px; font-size:1rem; }
    .card .info p { margin:0; color:#777; font-size:0.9rem; }

    /* Modal */
    .modal-bg { position:fixed; inset:0; background:rgba(247, 238, 238, 0.5); display:none; align-items:center; justify-content:center; z-index:999; }
    .modal { background:#fff; padding:20px; max-width:600px; width:90%; border-radius:6px; position:relative; overflow-y:auto; max-height:90vh; }
    .modal-close { position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.2rem; cursor:pointer; }
    .modal h3 { margin-top:10px; }
    .modal-gallery { display:flex; gap:10px; flex-wrap:wrap; margin-top:10px; }
    .modal-gallery img { width:48%; border-radius:4px; }
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

<div class="container">
  <!-- Sidebar -->
  <aside class="sidebar">
    <h3>Fleecewear</h3>
    <h4>Size</h4>
    <ul>
      <li><label><input type="checkbox"> S</label></li>
      <li><label><input type="checkbox"> M</label></li>
      <li><label><input type="checkbox"> L</label></li>
      <li><label><input type="checkbox"> XL</label></li>
    </ul>
    <h4>Color</h4>
    <ul>
      <li><label><input type="checkbox"> Cream</label></li>
      <li><label><input type="checkbox"> White</label></li>
      <li><label><input type="checkbox"> Green</label></li>
      <li><label><input type="checkbox"> Brown</label></li>
      <li><label><input type="checkbox"> Red</label></li>
    </ul>
  </aside>

 <section class="products">
  <div class="card"
    data-title="Sneaker One"
    data-price="$220"
    data-desc="Premium leather sneaker with signature badge."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_F/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_R/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_A/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_B/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_C/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_D/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100037S0060V0159_F/ppk73x/std/768x1024/6100037-malfile-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" alt="Sneaker One">
    <div class="info"><h4>6100037 MALFILÉ FLEECE 'OLD' EFFECT</h4><p>$455.00</p></div>
  </div>

  <div class="card"
    data-title="Sport Runner"
    data-price="$180"
    data-desc="Lightweight running shoe with mesh upper."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_F/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_R/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_A/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_B/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_B/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_E/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V0029_F/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>6100036 SCAN CAMO ON TEXTURED JERSEY</h4><p>$390.00</p></div>
  </div>

  <div class="card"
    data-title="Tactical Boot"
    data-price="$260"
    data-desc="Rugged boot with waterproof build."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_F/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_R/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_A/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_B/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_C/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_E/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100036S00E6V009A_F/ppk73x/std/768x1024/6100036-scan-camo-on-textured-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4> 6100036 SCAN CAMO ON TEXTURED JERSEY</h4><p>$390.00</p></div>
  </div>

  <div class="card"
    data-title="Stretch Broken Twill"
    data-price="$430"
    data-desc="Durable cotton twill for everyday performance."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_F/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_R/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_A/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_B/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_C/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_E/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100039S0092V0055_F/ppk73x/std/768x1024/6100039-cotton-fleece,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>6100039 COTTON FLEECE</h4><p>$465.00</p></div>
  </div>

  <div class="card"
    data-title="Membrana 3L TC"
    data-price="$800"
    data-desc="High-performance outerwear built for extreme weather."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_F/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_R/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_A/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_B/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=aviff",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_C/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_E/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100011S00F3V0090_F/ppk73x/std/768x1024/6100011-cotton-stretch-fleece_stone-island-ghost,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>6100011 COTTON STRETCH FLEECE_STONE ISLAND GHOST</h4><p>$425.00</p></div>
  </div>


  <div class="card"
    data-title="Light Pure RWS Wool"
    data-price="$555"
    data-desc="Sustainable wool blend with soft and light feel."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_F/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_R/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_A/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_B/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_C/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_E/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S156100033S0045V0154_F/ppk73x/std/768x1024/6100033-organic-cotton-diagonal-fleece-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>6100033 ORGANIC COTTON DIAGONAL FLEECE 'OLD' EFFECT</h4><p>$525.00</p></div>
  </div>

</section>
<button class="btn-kembali" onclick="history.back()" aria-label="Kembali">←</button>



<!-- Modal -->
<div class="modal-bg" id="modal-bg">
  <div class="modal">
    <button class="modal-close" id="modal-close">&times;</button>
    <h3 id="modal-title"></h3>
    <p id="modal-price"></p>
    <p id="modal-desc"></p>
    <div class="modal-gallery" id="modal-gallery"></div>
  </div>
</div>


<script>
  const modalBg = document.getElementById('modal-bg');
  const modalClose = document.getElementById('modal-close');
  const modalTitle = document.getElementById('modal-title');
  const modalPrice = document.getElementById('modal-price');
  const modalDesc = document.getElementById('modal-desc');
  const modalGallery = document.getElementById('modal-gallery');

  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
      modalTitle.innerText = card.dataset.title;
      modalPrice.innerText = card.dataset.price;
      modalDesc.innerText = card.dataset.desc;

      // Reset gallery
      modalGallery.innerHTML = '';
      const images = JSON.parse(card.dataset.images);
      images.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        modalGallery.appendChild(img);
      });

      modalBg.style.display = 'flex';
    });
  });


  modalClose.onclick = () => { modalBg.style.display = 'none'; };
  modalBg.onclick = e => { if (e.target === modalBg) modalBg.style.display = 'none'; };
    const backToTopBtn = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 150) {
      backToTopBtn.classList.add('show');
    } else {
      backToTopBtn.classList.remove('show');
    }
  });

  backToTopBtn.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
  });
</script>

</body>
</html>
