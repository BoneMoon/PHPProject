<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  http_response_code(405);
  exit('405 Method Not Allowed');
}

require_once('../../app/core/Db.php');
require_once('../../app/models/Brawlers.php');

use app\models\Brawlers;

$brawler = new Brawlers();

if (!isset($_GET['id'])) {
  $data = $brawler->findAll();
} else {
  if (is_numeric($_GET['id'])) {
    $data = $brawler->findById($_GET['id']);
  } else {
    $data = array();
  }
}

$idrecords = count($data);
$info = array();

if ($idrecords > 0) {
  $info['brawler'] = array();
  
    extract($data);

    $item = array(
      "id" => $id,
      "name" => $name,
      "rarity" => $rarity,
      "image" => $image,
      "role" => $role,
      "speed" => $speed,
      "health" => $health
    );
    
    array_push($info['brawler'], $item);

} else {
  $info = array('message' => '0 brawlers encontrados...');   
}

echo json_encode($info);
?>