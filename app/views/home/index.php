<!doctype html>

<html lang="en">

<head>
  <title>Brawlstars ECGM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->


  <?php require __DIR__ . "/../partial/style.php" ?>

</head>
<!-- Título  -->

<body>
  <?php require __DIR__ . "/../partial/navBar.php" ?>


  <section class="container mt-2" style="margin-top: 80px">
    <div class="row mx-auto">
      <div class="col-12">
        <h1 style="color: white; text-align: center;">**BrawlSatrs**</h1>
      </div>
    </div>
  </section>

  <!-- Imagem Grande  -->
  <div class="container">
    <div class="row m-3">
      <section>
        <img class="mx-auto d-block" src="assets/imgs/imgHomePage.jpeg" alt="" style="width: 80%;">
      </section>
    </div>
  </div>


  <!-- Cards  -->
  <div class="container">
    <div class="row m-5">
      <!-- Primeiro  -->
      <div class="col-md-4">
        <div class="card mx-auto cardLayout PersonalizarCardList">
          <div>
            <img src="assets/imgs/Gene.png" alt="imageLeft" class="img-fluid imageCards">
          </div>
          <div>
            <h5 class="card-title">Gene</h5>
          </div>
        </div>
      </div>
      <!-- Segundo  -->
      <div class="col-md-4">
        <div class="card cardLayout PersonalizarCardList">
          <div>
            <img src="assets/imgs/Jessie.png" alt="imageLeft" class="img-fluid imageCards">
          </div>
          <div>
            <h5 class="card-title mx-auto" style="vertical-align : bottom;">Jessie</h5>
          </div>
        </div>
      </div>
      <!-- Terceiro  -->
      <div class="col-md-4">
        <div class="card mx-auto cardLayout PersonalizarCardList">
          <div>
            <img src="assets/imgs/Leon.png" alt="imageLeft" class="img-fluid imageCards">
          </div>
          <div>
            <h5 class="card-title">Leon</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Butão de link para a lista de Brawlers  -->
  </section>
  <div class="container mt-5">
    <div class="row mx-auto d-block">
      <?php if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) : ?>
        <a type="button" href="<?= path("/brawler") ?>" class="btn btn-lg btn-primary ative">Ver Lista Completa de Brawlers</a>
      <?php else : ?>
        <button type="button" class="btn btn-lg btn-primary ative" disabled>Ver Lista Completa de Brawlers</button>
      <?php endif; ?>
    </div>
  </div>

  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>