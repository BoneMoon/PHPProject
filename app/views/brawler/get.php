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
    <?php foreach ($brawler as $prop => $val) : ?>
      <?php if ($prop === "id") : ?>
        <?php continue ?>
      <?php endif; ?>
      <?php if ($prop === "image") : ?>
        <img src="<?= "/brawlstars/$val" ?>" class="card-img-top" alt="brawler image">
        <div class="card-body">
        <?php else : ?>
          <?php if ($prop === "name") : ?>
            <h5 class="card-title"> <?= $val ?> </h5>
          <?php else : ?>
            <?php $prop ?> <?php $val ?>
            <p class="card-text"> <?= $prop . ': ' . $val ?> </p>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
        </div>
  </div>
  <?php require __DIR__ . "/../partias/scripts.php" ?>
</body>

</html>