<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "./inc/head.inc.php" ?>
  <title>Odin Recipes</title>
</head>

<body>
  <?php
  include "./inc/nav.inc.php";
  ?>
  <h1>Odin Recipes</h1>
  <h2><a href="./recipes/gamjatang.php">Gamjatang</a></h2>
  <h2><a href="./recipes/bread.php">Pain au Chocolat</a></h2>
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="./recipes/gamjatang.php">
            <img src="./img/gamjatang.jpg" class="d-block w-100" alt="gamjatang-picture">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gamjatang</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="./recipes/bread.php">
            <img src="./img/pain-au-chocolat.jpeg" class="d-block w-100" alt="pain-au-chocolate-picture">
            <div class="carousel-caption d-none d-md-block">
              <h5>Pain Au Chocolat</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>More to come...</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</body>

</html>