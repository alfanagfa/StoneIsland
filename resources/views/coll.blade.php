<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>View all</title>
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
    .modal-bg { position:fixed; inset:0; background:rgba(0,0,0,0.5); display:none; align-items:center; justify-content:center; z-index:999; }
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
    <h3>View all</h3>
    <h4>list</h4>
    <ul>
      <li><label><input type="checkbox"> Shoes</label></li>
      <li><label><input type="checkbox">trousers</label></li>
      <li><label><input type="checkbox"> Jacket</label></li>
    </ul>
    <h4>Size</h4>
    <ul>
      <li><label><input type="checkbox"> 39</label></li>
      <li><label><input type="checkbox"> 40</label></li>
      <li><label><input type="checkbox"> 41</label></li>
      <li><label><input type="checkbox"> 42</label></li>
      <li><label><input type="checkbox"> 43</label></li>
    </ul>
    <h4>Colour</h4>
    <ul>
      <li><label><input type="checkbox"> Black</label></li>
      <li><label><input type="checkbox"> White</label></li>
      <li><label><input type="checkbox"> Green</label></li>
    </ul>
  </aside>

 <section class="products">
  <div class="card"
    data-title="Sneaker One"
    data-price="$220"
    data-desc="Premium leather sneaker with signature badge."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_F/ppk73x/std/768x1024/s0101-leather,-photo.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_R/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_A/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_B/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_C/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_G/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0029_F/ppk73x/std/768x1024/s0101-leather,-photo.jpg" alt="Sneaker One">
    <div class="info"><h4>Sneaker One</h4><p>$220</p></div>
  </div>

  <div class="card"
    data-title="Sport Runner"
    data-price="$180"
    data-desc="Lightweight running shoe with mesh upper."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_F/ppk73x/std/768x1024/s0101-leather,-photo.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_R/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_B/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_C/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_D/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_G/ppk73x/std/768x1024/s0101-leather,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/81FWS0101V0099_F/ppk73x/std/768x1024/s0101-leather,-photo.jpg" alt="Sport Runner">
    <div class="info"><h4>Sport Runner</h4><p>$180</p></div>
  </div>

  <div class="card"
    data-title="Tactical Boot"
    data-price="$260"
    data-desc="Rugged boot with waterproof build."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_F/ppk73x/std/1571x2095/3100304-stretch-organic-broken-twill-cotton-old-effect-pearl-grey-stone-island.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_R/ppk73x/std/768x1024/3100304-stretch-organic-broken-twill-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_A/ppk73x/std/768x1024/3100304-stretch-organic-broken-twill-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_B/ppk73x/std/768x1024/3100304-stretch-organic-broken-twill-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_C/ppk73x/std/768x1024/3100304-stretch-organic-broken-twill-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_D/ppk73x/std/768x1024/3100304-stretch-organic-broken-twill-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S153100304S0004V0161_F/ppk73x/std/1571x2095/3100304-stretch-organic-broken-twill-cotton-old-effect-pearl-grey-stone-island.jpg" alt="Tactical Boot">
    <div class="info"><h4>Tactical Boot</h4><p>$260</p></div>
  </div>

  <div class="card"
    data-title="Stretch Broken Twill"
    data-price="$430"
    data-desc="Durable cotton twill for everyday performance."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_F/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_R/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_A/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_B/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_D/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_E/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115303L1A0129_F/ppk73x/std/768x1024/303l1-stretch-broken-twill-organic-cotton-old-effect,-photo.jpg" alt="Stretch Broken Twill">
    <div class="info"><h4>Stretch Broken Twill</h4><p>$430</p></div>
  </div>

  <div class="card"
    data-title="Membrana 3L TC"
    data-price="$800"
    data-desc="High-performance outerwear built for extreme weather."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_F/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_R/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_A/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_B/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_C/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_H/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/K1S154100093S0A21V0041_F/ppk73x/std/768x1024/4100093-membrana-3l-tc,-photo.jpg" alt="Membrana 3L TC">
    <div class="info"><h4>Membrana 3L TC</h4><p>$800</p></div>
  </div>

  <div class="card"
    data-title="Light Pure RWS Wool"
    data-price="$555"
    data-desc="Sustainable wool blend with soft and light feel."
    data-images='[
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115525C4A0029_F/ppk73x/std/768x1024/525c4-light-pure-rws-wool,-photo.jpg",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115552C2A0029_R/ppk73x/std/768x1024/552c2-full-rib-rws-wool,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115552C2A0029_A/ppk73x/std/768x1024/552c2-full-rib-rws-wool,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115552C2A0029_B/ppk73x/std/768x1024/552c2-full-rib-rws-wool,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115552C2A0029_C/ppk73x/std/768x1024/552c2-full-rib-rws-wool,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif",
      "https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115552C2A0029_D/ppk73x/std/768x1024/552c2-full-rib-rws-wool,-photo.jpg?scalemode=centered&adjustcrop=reduce&quality=80&format=avif"
    ]'>
    <img src="https://stoneisland-cdn.thron.com/delivery/public/image/stoneisland/8115525C4A0029_F/ppk73x/std/768x1024/525c4-light-pure-rws-wool,-photo.jpg" alt="Light Pure RWS Wool">
    <div class="info"><h4>Light Pure RWS Wool</h4><p>$555</p></div>
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
</script>

</body>
</html>
