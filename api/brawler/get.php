<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  http_response_code(405);
  exit('405 Method Not Allowed');
}

require_once('../../core/Db.php');
require_once('../../models/Brawlers.php');

$brawler = new Brawler();

if (!isset($_GET['id'])) {
  $data = $brawler->get();
} else {
  if (is_numeric($_GET['id'])) {
    $data = $brawler->getById($_GET['id']);
  } else {
    $data = array();
  }
}

$idrecords = count($data);
$info = array();

if ($idrecords > 0) {
  $info['brawler'] = array();
  foreach ($data as $brawler) {
    
    extract($brawler);

    $item = array(
      "name" => "name",
      "rarity" => "rarity",
      "image" => $imagem_caminho,
      "role" => "role",
      "speed" => "speed",
      "health" => "health"
    );

    array_push($info['brawler'], $item);

  }

} else {
  $info = array('message' => '0 brawlers encontrados...');   
}

echo json_encode($info);
?>