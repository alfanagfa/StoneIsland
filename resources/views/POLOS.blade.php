<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>POLOS & T-SHIRTS</title>
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
    <h3>POLOS & T-SHIRTS</h3>
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
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_F/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_R/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_A/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_B/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_C/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_D/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100036S0149V0029_F/ppk73x/std/768x1024/2100036-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" alt="Sneaker One">
    <div class="info"><h4>2100036 COMBED ORGANIC COTTON JERSEY</h4><p>$335.00</p></div>
  </div>

  <div class="card"
    data-title="Sport Runner"
    data-price="$180"
    data-desc="Lightweight running shoe with mesh upper."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_F/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_R/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_A/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_B/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_C/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_D/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100040S00E7V0054_F/ppk73x/std/768x1024/2100040-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>2100040 COMBED ORGANIC COTTON JERSEY</h4><p>$335.00</p></div>
  </div>

  <div class="card"
    data-title="Tactical Boot"
    data-price="$260"
    data-desc="Rugged boot with waterproof build."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_F/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_R/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_A/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_B/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_C/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_D/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S1521002RCS0136V0001_F/ppk73x/std/768x1024/21002rc-242-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>7100012 3L GORE-TEX MADE WITH BIONIC POLYESTER FACE_STONE ISLAND STELLINA</h4><p>$450.00</p></div>
  </div>

  <div class="card"
    data-title="Stretch Broken Twill"
    data-price="$430"
    data-desc="Durable cotton twill for everyday performance."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_F/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_R/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_A/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_B/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_C/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_D/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0088V0029_F/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>2100016 COMBED ORGANIC COTTON JERSEY</h4><p>$335.00</p></div>
  </div>

  <div class="card"
    data-title="Membrana 3L TC"
    data-price="$800"
    data-desc="High-performance outerwear built for extreme weather."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_F/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_R/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_A/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_B/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_C/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_D/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100011S0095V0055_F/ppk73x/std/768x1024/2100011-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>2100011 COMBED ORGANIC COTTON JERSEY'</h4><p>$280.00</p></div>
  </div>


  <div class="card"
    data-title="Light Pure RWS Wool"
    data-price="$555"
    data-desc="Sustainable wool blend with soft and light feel."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_F/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_R/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_A/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_B/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_C/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_D/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S152100016S0087V0093_F/ppk73x/std/768x1024/2100016-combed-organic-cotton-jersey,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>2100016 COMBED ORGANIC COTTON JERSEY</h4><p>$310.00</p></div>
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
