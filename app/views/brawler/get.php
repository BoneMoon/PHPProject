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
  <div class="container">
    <div class="row specifiedBrawler">
      <section style="background-color:white; border-radius: 10px;">
        <div class="col-md-8">
          <img src="<?= "/brawlstars/{$brawler['image']}" ?>" class="" alt="brawler image" style="background-color: white; padding: 80px; border-radius: 10px">
        </div>
        <div class="col-md-4">
          <div style="text-align: center;">
            <h1 class="card-title mb-5"> <?= $brawler["name"] ?> </h1>
          </div>
          <div class="text-justify mt-5" style="padding-left: 30%">
            <h3 class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </h3>
            <h3 class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </h3>
            <h3 class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </h3>
            <h3 class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </h3>
          </div>
        </div>
      </section>
    </div>
  </div>
  <form method="POST" action="<?= path("/brawler/deleteBrawler") ?>">
    <div class="row pt-5">
      <input type="hidden" name="id" value="<?= $brawler['id'] ?>">
      <button type="submit" class="btn btn-primary"> Eliminar Brawler</button>
      <!-- values = "$brawlers['id']" -->
    </div>
  </form>
  </div>
  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>