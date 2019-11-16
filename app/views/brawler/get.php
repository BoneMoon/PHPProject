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
  <div class="container mx-auto">
    <div class="row">
      <section class="p-5" style="background-color:white; border-radius: 10px;">
        <div class="col-md-8">
          <img src="<?= "/brawlstars/{$brawler['image']}" ?>" alt="brawler image" style="background-color: white; padding: 20px; border-radius: 10px">
        </div>
          <div style="text-align: center;">
            <h1 class="card-title mb-5"> <?= $brawler["name"] ?> </h1>
          </div>
          <div class="text-justify mt-5" style="padding-left: 15%">
            <h3 class="card-text"> <?= 'Rarity: ' . $brawler["rarity"] ?> </h3>
            <h3 class="card-text"> <?= 'Role: ' . $brawler["role"]  ?> </h3>
            <h3 class="card-text"> <?= 'Health: ' . $brawler["health"]  ?> </h3>
            <h3 class="card-text"> <?= 'Speed: ' . $brawler["speed"]  ?> </h3>
          </div>
      </section>
    </div>
  <form method="POST" action="<?= path("/brawler/deleteBrawler") ?>">
    <div class="row pt-5">
      <input type="hidden" name="id" value="<?= $brawler['id'] ?>">
      <button type="submit" class="btn btn-danger mx-2"> Eliminar Brawler</button>
      <input type="button" value="Editar Brawler" class="btn btn-success mx-2" id="btnHome" onClick="document.location.href='<?= path("/brawler/atualBrawler/{$brawler['id']}") ?>'" />
      <input type="button" value="voltar" class="btn btn-primary mx-2" id="btnHome" onClick="document.location.href='<?= path("/brawler") ?>'" />
    </div>
  </form>
  </div>
  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>