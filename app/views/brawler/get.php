<ul>
  <?php foreach ($brawler as $prop => $val) : ?>
    <li>
      <?php if ($prop === "image") : ?>
        <img src="<?= "/brawlstars/$val" ?>" alt="brawler image">
      <?php else : ?>
        <?= $prop ?>: <?= $val ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>


</ul>