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

  <!-- <div class="card cardLayout" style="width: 18rem;">
    <img src="<?= "/brawlstars/{$brawler['image']}" ?>" class="card-img-top" alt="brawler image">
    <div class="card-body">
      <h5 class="card-title"> <?= $brawler["name"] ?> </h5>
      <p class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </p>
      <p class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </p>
      <p class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </p>
      <p class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </p>
    </div>
  </div> -->

  <div class="container">
    <div class="row specifiedBrawler">
      <div class="col-md-6">
        <img src="<?= "/brawlstars/{$brawler['image']}" ?>" class="" alt="brawler image" style="background-color: white; padding: 80px; border-radius: 10px">
      </div>
      <div class="col-md-6">
        <section style="background-color:white; height: 100%; width: 100%; border-radius: 10px;">
          <div style="text-align: center;">
            <h1 class="card-title mb-5"> <?= $brawler["name"] ?> </h1>
          </div>
          <div class="text-justify mt-5" style="padding-left: 30%">
            <h3 class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </h3>
            <h3 class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </h3>
            <h3 class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </h3>
            <h3 class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </h3>
          </div>
        </section>

      </div>
    </div>
  </div>
  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>