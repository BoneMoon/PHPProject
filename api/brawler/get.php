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


if ($data !== null) {
  echo json_encode($data);

} else {
  echo json_encode(array('message' => '0 brawlers encontrados...'));
}


?>