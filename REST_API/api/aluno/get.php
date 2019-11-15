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
require_once('../../models/Aluno.php');

$aluno = new Aluno();

if (!isset($_GET['n'])) {
  $data = $aluno->get();
} else {
  if (is_numeric($_GET['n'])) {
    $data = $aluno->getById($_GET['n']);
  } else {
    $data = array();
  }
}

$nrecords = count($data);
$info = array();

if ($nrecords > 0) {
  $info['aluno'] = array();
  foreach ($data as $aluno) {
    
    extract($aluno);

    $item = array(
      'numero' => $numero,
      'nome' => $nome,
      'grupo' => $grupo,
      'observacoes' => $observacoes,
      'anoletivo' => $anoletivo
    );

    array_push($info['aluno'], $item);

  }

} else {
  $info = array('message' => '0 alunos encontrados...');   
}

echo json_encode($info);
?>