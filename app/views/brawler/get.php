<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php require __DIR__ . "/../partias/style.php" ?>
</head>

<body>

  <div class="card cardLayout" style="width: 18rem;">
    <img src="<?= "/brawlstars/{$brawler['image']}" ?>" class="card-img-top" alt="brawler image">
    <div class="card-body">
      <h5 class="card-title"> <?= $brawler["name"] ?> </h5>
      <p class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </p>
      <p class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </p>
      <p class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </p>
      <p class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </p>
    </div>
  </div>
  <?php require __DIR__ . "/../partias/scripts.php" ?>
</body>

</html>