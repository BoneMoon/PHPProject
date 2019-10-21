<?php
echo "<ul>";
foreach ($data['brawlers'] as $brawler) {
  echo '<li>' . $brawler['name'] . ' <a href="' . path("/brawler/get/") . '' . $brawler['id']  . '">Ver +</a></li>';
}
echo "<ul>";
