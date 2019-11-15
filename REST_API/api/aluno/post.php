<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');

require_once('../../core/Db.php');
require_once('../../models/Aluno.php');

$aluno = new Aluno();

$data = json_decode(file_get_contents('php://input'));

if (!empty((array) $data)) {
  $aluno->setData($data->numero,$data->nome,$data->grupo,$data->observacoes,$data->anoletivo);

  if ($aluno->insert() > 0) {
    $info = array('message' => 'Aluno inserido.'); 
  } else {
    $info = array('message' => 'Aluno NÃO inserido.'); 
  }
} else {
  $info = array('message' => 'Valores incorretos na invocação da API...'); 
}
echo json_encode($info);
?>