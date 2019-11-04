<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php require __DIR__ . "/../partial/style.php" ?>
  <?php require __DIR__ . "/../partial/common.php" ?>
</head>

<body>
  <section class="container pt-5" style="color: white; text-align: center">
    <h1>Lista de Brawlers</h1>
  </section>

  <div class="container pt-5">
    <div class="row">
      <?php foreach ($brawlers as $brawler) : ?>
        <div class="col-md-4 py-3">
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