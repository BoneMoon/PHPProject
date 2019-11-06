<!doctype html>

<?php
session_start();

if(!empty($_POST['logout'])) {

    session_unset();
	session_destroy();
}
?>
<html lang="en">

<head>
  <title>Brawlstars ECGM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <?php require __DIR__ . "/../partial/style.php" ?>
  <?php require __DIR__ . "/../partial/common.php" ?>
</head>
<!-- Título  -->
<body>

<?php 
  if(empty($_SESSION['id_utilizador'])) {
?>
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
      <button type="button" class="btn btn-lg btn-primary" disabled> Ver Lista Completa de Brawlers</button>
    </div>
  </div>
    
  <?php 
    } else { 
  ?>
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
      <a href="<?= path("/brawler")?>"><button type="button" class="btn btn-lg btn-primary ative"> Ver Lista Completa de Brawlers</button></a>
    </div>
  </div>
<?php
  }
?>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>