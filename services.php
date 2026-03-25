<?php include "header.php"; ?>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
}

.menu-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.container {
  max-width: 1200px;
  margin: auto;
}

.title {
  text-align: center;
  margin-bottom: 30px;
  font-weight: bold;
}

/* PRICING */
.pricing {
  display: grid;
  gap: 20px;
  margin-bottom: 40px;
}

.price {
  font-size: 24px;
  color: #007bff;
  font-weight: bold;
}

/* MENU GRID */
.menu-grid {
  display: grid;
  gap: 20px;
}

/* CARD */
.card {
  background: #fff;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.card-header {
  background: #212529;
  color: #fff;
  padding: 10px;
  text-align: center;
  border-radius: 8px;
  margin-bottom: 10px;
  font-weight: bold;
}

.highlight {
  border: 2px solid #007bff;
}

.special .card-header {
  background: #007bff;
}

/* RESPONSIVE */

/* Mobile */
@media (max-width: 576px) {
  .pricing {
    grid-template-columns: 1fr;
  }
  .menu-grid {
    grid-template-columns: 1fr;
  }
}

/* Tablet */
@media (min-width: 577px) and (max-width: 991px) {
  .pricing {
    grid-template-columns: repeat(2, 1fr);
  }
  .menu-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Laptop/Desktop */
@media (min-width: 992px) {
  .pricing {
    grid-template-columns: repeat(3, 1fr);
  }
  .menu-grid {
    grid-template-columns: repeat(3, 1fr);
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
            <h2 class="page-cover-tittle">Mess Services</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li class="active text-warning">Services</li>
            </ol>
        </div>
    </div>
</section>
<section class="menu-section">
  <div class="container">

    <h2 class="title">Weekly Menu & Pricing</h2>

    <!-- PRICING -->
    <div class="pricing">
      <div class="card">
        <h3>One Time Dinner</h3>
        <p class="price">₹1800</p>
        <p>Dinner Only</p>
      </div>

      <div class="card highlight">
        <h3>Two Times Food</h3>
        <p class="price">₹3000</p>
        <p>Breakfast + Dinner</p>
      </div>

      <div class="card">
        <h3>Three Times Food</h3>
        <p class="price">₹3600</p>
        <p>Full Day Meals</p>
      </div>
    </div>

    <!-- MENU -->
    <div class="menu-grid">

      <div class="card">
        <div class="card-header">Monday</div>
        <p><strong>Breakfast:</strong> Aloo Paratha, Raita, Chutney</p>
        <p><strong>Lunch:</strong> Rice, Dal Fry, Seasonal Veg, Achaar, Papad, Salad</p>
        <p><strong>Dinner:</strong> Roti, Mix Veg, Kheer, Sewai / Halwa</p>
      </div>

      <div class="card">
        <div class="card-header">Tuesday</div>
        <p><strong>Breakfast:</strong> Poori Sabzi</p>
        <p><strong>Lunch:</strong> Rice, Dal, Paneer Butter Masala</p>
        <p><strong>Dinner:</strong> Lachha Paratha, Paneer Masala</p>
      </div>

      <div class="card">
        <div class="card-header">Wednesday</div>
        <p><strong>Breakfast:</strong> Chilla, Raita</p>
        <p><strong>Lunch:</strong> Jeera Rice, Chicken, Salad, Papad</p>
        <p><strong>Dinner:</strong> Roti, Egg Masala, Kadhi, Salad, Achaar</p>
      </div>

      <div class="card">
        <div class="card-header">Thursday</div>
        <p><strong>Breakfast:</strong> Roti, Aloo Chana</p>
        <p><strong>Lunch:</strong> Rice, Kadhi Badi, Aloo Jeera, Achaar, Papad, Salad</p>
        <p><strong>Dinner:</strong> Rajma / Chana / Chole, Roti, Salad, Achaar</p>
      </div>

      <div class="card">
        <div class="card-header">Friday</div>
        <p><strong>Breakfast:</strong> Plain Paratha, Aloo Bhujia, Raita</p>
        <p><strong>Lunch:</strong> Rice, Dal, Seasonal Veg, Bhujia, Achaar, Salad</p>
        <p><strong>Dinner:</strong> Tadka Dal, Roti, Bhujia</p>
      </div>

      <div class="card">
        <div class="card-header">Saturday</div>
        <p><strong>Breakfast:</strong> Poha, Sooji Halwa, Mixture</p>
        <p><strong>Lunch:</strong> Veg Mix Khichdi / Plain Khichdi, Chokha</p>
        <p><strong>Dinner:</strong> Dal, Paratha, Chutney, Raita</p>
      </div>

      <div class="card special">
        <div class="card-header">Sunday (Special)</div>
        <p><strong>Breakfast:</strong> Bread Omelette</p>
        <p><strong>Lunch:</strong> Rice, Chicken, Salad, Papad</p>
        <p><strong>Dinner:</strong> Poori, Bhujia, Kheer</p>
      </div>

    </div>

  </div>
</section>
<?php include "footer.php"; ?>