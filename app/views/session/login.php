<?php

session_start();

if(!empty($_SESSION['id_utilizador'])) {
    header('Location:path("/app/views/home/index.php)');
}

require_once("connection_params.php");
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$conn->set_charset("utf8");
if ($conn->connect_error) {
  trigger_error('A ligação à Base de Dados falhou: '  . $conn->connect_error, E_USER_ERROR);
}

$mensagem="";

// se(foi feito login)
// NOTA PHP: a função empty verifica se determinada variável não está definida OU está vazia
if(!empty($_POST['login'])) {
    
    // neste ponto a variável global $_POST["login"] está definida e tem valor
    // ir à base de dados extrair o utilizador ativo, com as credenciais introduzidas no formulário
    $sql = 'SELECT id_utilizador, nome FROM utilizador where ativo = 1 AND id_utilizador = ? AND palavra_passe = ?';

    $stmt = $conn->prepare($sql);
    if($stmt === false) {
        trigger_error('Problema com o SQL: ' . $sql . ' Erro: ' . $conn->error, E_USER_ERROR);
    }
    
    $stmt->bind_param('ss', $_POST['utilizador'], $_POST['palavra_passe']);

    /* Executar statement */
    $stmt->execute();

    $stmt->store_result();
    $numero_registos = $stmt->num_rows;

    $stmt->bind_result($id_utilizador, $nome);
    
    if ($stmt->fetch()) {

        $_SESSION['id_utilizador']  = $id_utilizador;
        $_SESSION['nome']           = $nome;

        header('Location:path("/app/views/home/index.php")');
    } else {
        $mensagem = 'Credenciais de acesso inválidas.';
    }
}

if(!empty($_POST['logout'])) {
	
    session_unset();
	session_destroy();
}

?>

<html lang="pt-pt">

<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description" content="Template HTML base para as aulas">
    <meta name="author" content="José Viana">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="css/sessoes.css?v=1.0">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper regis">
        <h2>Iniciar Sessão</h2>
        <p>Por favor introduza as suas credenciais para iniciar sessão.</p>

        <div style="padding-top: 40px;">

            <?php 
            if(empty($_SESSION['id_utilizador'])) {
            ?>
                <form action="login.php" method="post" id="frmLogin">
                    
                    <?php
                    if(!empty($mensagem)) {
                    ?>
                        <div class="error-message"><?php echo $mensagem;?></div>	
                    <?php
                    } 
                    ?>
                    
                    <div>
                        <div>Utilizador</div>
                        <div><input id="utilizador" name="utilizador" type="text"></div>
                    </div>
                    <div>
                        <div>Palavra-passe</div>
                        <div><input id="palavra_passe" name="palavra_passe" type="password"></div>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Iniciar sessão">
                    </div>
                </form>
            <?php 
            } else { 
            ?>
                <form action="login.php" method="post" id="frmLogout">
                    <div><h2>Olá <?php echo $_SESSION['nome']?></h2></div>
                    <div><input type="submit" name="logout" value="Terminar sessão" class="logout-button"></div>
                </form>    
            <?php
            }
            ?>

        </div>
        <div style="padding-top: 40px;">
            <a href='<?php= path("/app/views/home/index.php")?>'>Voltar</a>
        </div>
    </div>
</body>

</html>