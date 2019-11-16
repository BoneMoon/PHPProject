<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php require __DIR__ . "/../partial/style.php" ?>
</head>

<body>
  <?php require __DIR__ . "/../partial/navBar.php" ?>
  <section class="container pt-3" style="color: white; ">
    <h1 style=" text-align: center;">Lista de Brawlers</h1>
    <input type="button" value="Criar Brawler" class="btn btn-success my-2 mx-2" id="btnHome" onClick="document.location.href='<?= path("/brawler/criarBrawler") ?>'" />
  </section>

  <div class="container pt-3">
    <div class="row">
      <?php foreach ($brawlers as $brawler) : ?>
        <div class="col-lg-4 col-md-6 py-3">
          <div class="card cardLayout PersonalizarCardList scaleAnim" style="width: 18rem;">
            <img src="<?= "/brawlstars/{$brawler['image']}" ?>" class="img-fluid imageCards" alt="brawler image">
            <div class="card-body">
              <h5 class="card-title"> <?= $brawler["name"] ?> </h5>
              <!-- <p class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </p>
          <p class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </p>
          <p class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </p>
          <p class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </p> -->
              <a class="btn btn-primary" href="<?= path("/brawler/get/{$brawler['id']}") ?>">Ver mais</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>