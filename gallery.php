<?php include "header.php"; ?>

<style>
/* GRID GAP FIX */
.row.g-3 {
  --bs-gutter-x: 20px;
  --bs-gutter-y: 20px;
}

/* Gallery Box */
.gallery-box {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  cursor: pointer;
  background: #fff;
  padding: 6px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.gallery-box img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-radius: 8px;
  transition: 0.4s;
}

.gallery-box:hover img {
  transform: scale(1.08);
}

/* Overlay */
.overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.5);
  color: #fff;
  font-size: 28px;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  border-radius: 12px;
  transition: 0.3s;
}

.gallery-box:hover .overlay {
  opacity: 1;
}

/* Modal */
.custom-modal {
  background: rgba(0,0,0,0.95);
}

.modal-img {
  max-width: 95%;
  max-height: 90vh;
  object-fit: contain;
  border-radius: 10px;
}

/* Close */
.close-btn {
  position: absolute;
  top: 15px;
  right: 20px;
  background: red;
  color: #fff;
  border: none;
  font-size: 20px;
  padding: 6px 12px;
  border-radius: 50%;
  cursor: pointer;
}

/* Nav */
.nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.3);
  border: none;
  font-size: 26px;
  padding: 8px 14px;
  border-radius: 50%;
  cursor: pointer;
}

.prev-btn { left: 10px; }
.next-btn { right: 10px; }

.nav-btn:hover,
.close-btn:hover {
  background: #007bff;
}

/* Mobile */
@media (max-width: 576px) {
  .row.g-3 {
    --bs-gutter-x: 15px;
    --bs-gutter-y: 15px;
  }

  .gallery-box img {
    height: 180px;
  }

  .modal-img {
    max-height: 70vh;
  }
}

/* Tablet */
@media (min-width: 577px) and (max-width: 991px) {
  .row.g-3 {
    --bs-gutter-x: 18px;
    --bs-gutter-y: 18px;
  }

  .gallery-box img {
    height: 200px;
  }
}
</style>
<section class="breadcrumb_area" 
    style="background: url('img/banner.jpg') no-repeat center center/cover; position: relative;">

    <div class="overlay bg-parallax" 
        style="background: rgba(0,0,0,0.5); position:absolute; top:0; left:0; width:100%; height:100%;">
    </div>

    <div class="container" style="position:relative; z-index:2;">
        <div class="page-cover text-center text-white">
            <h2 class="page-cover-tittle">Photo</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li class="active text-warning">Photos Gallery</li>
            </ol>
        </div>
    </div>
</section>
<!-- GALLERY -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Our Gallery</h2>
     
    <h3>Harmu Colony PG </h3>
    <div class="row g-3">

      <!-- 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(0)">
          <img src="img/about/single1.jpg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(1)">
          <img src="img/about/double2.jpg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(2)">
          <img src="img/about/pre_single1.jpg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(3)">
          <img src="img/about/tripal1.jpg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(4)">
          <img src="img/about/img1.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 6 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(5)">
          <img src="img/about/img2.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 7 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(6)">
          <img src="img/about/img3.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 8 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(7)">
          <img src="img/about/img4.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 9 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(8)">
          <img src="img/about/img5.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 10 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(9)">
          <img src="img/about/img6.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 11 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(10)">
          <img src="img/about/img7.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

    </div>
    <br>
    <h3>Lalpur PG </h3>
    <div class="row g-3">

      <!-- 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(11)">
          <img src="img/lal/img1.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(12)">
          <img src="img/lal/img2.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(13)">
          <img src="img/lal/img3.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(14)">
          <img src="img/lal/img4.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="gallery-box" onclick="openModal(15)">
          <img src="img/lal/img5.jpeg">
          <div class="overlay">+</div>
        </div>
      </div>

  </div>
</section>

<!-- MODAL -->
<div class="modal fade" id="galleryModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content custom-modal">

      <div class="modal-body d-flex justify-content-center align-items-center position-relative">

        <img id="modalImage" class="modal-img">

        <!-- Close -->
        <button class="close-btn" onclick="closeModal()">✕</button>

        <!-- Prev -->
        <button class="nav-btn prev-btn" onclick="prevImage()">❮</button>

        <!-- Next -->
        <button class="nav-btn next-btn" onclick="nextImage()">❯</button>

      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
const images = [
  "img/about/single1.jpg",
  "img/about/double2.jpg",
  "img/about/pre_single1.jpg",
  "img/about/tripal1.jpg",
  "img/about/img1.jpeg",
  "img/about/img2.jpeg",
  "img/about/img3.jpeg",
  "img/about/img4.jpeg",
  "img/about/img5.jpeg",
  "img/about/img6.jpeg",
  "img/about/img7.jpeg",
  "img/lal/img1.jpeg",
  "img/lal/img2.jpeg",
  "img/lal/img3.jpeg",
  "img/lal/img4.jpeg",
  "img/lal/img5.jpeg"
];

let currentIndex = 0;
let modalInstance;

function openModal(index) {
  currentIndex = index;
  document.getElementById("modalImage").src = images[currentIndex];

  const modalEl = document.getElementById('galleryModal');
  modalInstance = new bootstrap.Modal(modalEl);
  modalInstance.show();
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  document.getElementById("modalImage").src = images[currentIndex];
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  document.getElementById("modalImage").src = images[currentIndex];
}

function closeModal() {
  if (modalInstance) modalInstance.hide();
}
</script>

<?php include "footer.php"; ?>