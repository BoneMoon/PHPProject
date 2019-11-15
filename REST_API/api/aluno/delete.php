<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

if ($_SERVER['REQUEST_METHOD'] != 'DELETE') {
  http_response_code(405);
  exit('405 Method Not Allowed');
}

require_once('../../core/Db.php');
require_once('../../models/Aluno.php');

$aluno = new Aluno();

$data = json_decode(file_get_contents('php://input'));

if (!empty((array) $data)) {
  $aluno->setData($data->numero, '', '', '', '');

  if ($aluno->delete() > 0) {
    $info = array('message' => 'Aluno eliminado.'); 
  } else {
    $info = array('message' => 'Aluno NÃO eliminado.'); 
  }
} else {
  $info = array('message' => 'Valores incorretos na invocação da API...'); 
}
echo json_encode($info);
?>