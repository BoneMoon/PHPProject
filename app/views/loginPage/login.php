<?php
session_start();

require_once("connection_params.php");
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$conn->set_charset("utf8");
if ($conn->connect_error) {
  trigger_error('A ligação à Base de Dados falhou: '  . $conn->connect_error, E_USER_ERROR);
}

$mensagem="";

if(!empty($_POST['login'])) {
    

    $sql = 'SELECT id_utilizador, nome FROM utilizador where ativo = 1 AND id_utilizador = ? AND palavra_passe = ?';

    $stmt = $conn->prepare($sql);
    if($stmt === false) {
        trigger_error('Problema com o SQL: ' . $sql . ' Erro: ' . $conn->error, E_USER_ERROR);
    }
    
    $stmt->bind_param('ss', $_POST['utilizador'], $_POST['palavra_passe']);

    $stmt->execute();

    $stmt->store_result();
    $numero_registos = $stmt->num_rows;

    $stmt->bind_result($id_utilizador, $nome);
    
    if ($stmt->fetch()) {

        $_SESSION['id_utilizador']  = $id_utilizador;
        $_SESSION['nome']           = $nome;
    } else {
        $mensagem = 'Credenciais de acesso inválidas.';
    }
}

if(!empty($_POST['logout'])) {

    session_unset();
	session_destroy();
}
