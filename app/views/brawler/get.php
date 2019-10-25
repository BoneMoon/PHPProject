<?php require "scrips/bootstrap.php"; ?>

<div class="card" style="width: 18rem;">
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