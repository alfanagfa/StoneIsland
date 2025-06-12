<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GIFTS</title>
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
    <h3>Gifts</h3>
    <h4>List</h4>
    <ul>
      <li><label><input type="checkbox"> Jacket</label></li>
      <li><label><input type="checkbox"> Bag</label></li>
      <li><label><input type="checkbox"> trousers</label></li>
      <li><label><input type="checkbox"> shirt</label></li>
    </ul>
    <h4>Size</h4>
    <ul>
      <li><label><input type="checkbox"> 39</label></li>
      <li><label><input type="checkbox"> 40</label></li>
      <li><label><input type="checkbox"> 41</label></li>
      <li><label><input type="checkbox"> 42</label></li>
      <li><label><input type="checkbox"> 43</label></li>
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
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_F/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_R/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_A/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_B/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_E/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_H/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100067S0069V0054_F/ppk73x/std/768x1024/4100067-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif" alt="Sneaker One">
    <div class="info"><h4>4100054 SKIN TOUCH NYLON-TC_STONE ISLAND STELLINA</h4><p>$500.00</p></div>
  </div>

  <div class="card"
    data-title="Sport Runner"
    data-price="$180"
    data-desc="Lightweight running shoe with mesh upper."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_F/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_R/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_A/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_C/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_D/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_E/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S155100036S00B5V0094_F/ppk73x/std/768x1024/5100036-soft-organic-cotton,-micro-stitch,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>6100030 16/2 COMBED ORGANIC COTTON JERSEY_STONE ISLAND MARINA</h4><p>$420.00</p></div>
  </div>

  <div class="card"
    data-title="Tactical Boot"
    data-price="$260"
    data-desc="Rugged boot with waterproof build."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_F/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_R/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_A/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_E/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_C/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_H/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S151200009S0069V007A_F/ppk73x/std/768x1024/1200009-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>7100012 3L GORE-TEX MADE WITH BIONIC POLYESTER FACE_STONE ISLAND STELLINA</h4><p>$450.00</p></div>
  </div>

  <div class="card"
    data-title="Stretch Broken Twill"
    data-price="$430"
    data-desc="Durable cotton twill for everyday performance."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_F/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_R/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_A/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_B/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_C/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_D/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S159200014S0075V0098_F/ppk73x/std/768x1024/9200014-resin-treated-cordurar-1500,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>9200014 RESIN TREATED CORDURA® 1500</h4><p>$200.00</p></div>
  </div>

  <div class="card"
    data-title="Membrana 3L TC"
    data-price="$800"
    data-desc="High-performance outerwear built for extreme weather."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_F/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_R/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_A/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_B/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_C/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_D/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15L100010S0069V0093_F/ppk73x/std/768x1024/l100010-organic-look-nylon-panama-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
    <div class="info"><h4>L100009 STRETCH COTTON TELA 'PARACADUTE'</h4><p>$365.00</p></div>
  </div>


  <div class="card"
    data-title="Light Pure RWS Wool"
    data-price="$555"
    data-desc="Sustainable wool blend with soft and light feel."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_F/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_R/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_A/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_B/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_C/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_G/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S15G100005S0110V0054_F/ppk73x/std/768x1024/g100005-tela-resinata,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif">
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
