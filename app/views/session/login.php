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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sessão</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper regis">
        <h2>Iniciar Sessão</h2>
        <p>Por favor introduza as suas credenciais para iniciar sessão.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nome de utilizador</label>
                <input type="text" name="username" class="form-control Irad" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Palavra-passe</label>
                <input type="password" name="password" class="form-control Irad">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary ButtonStyles" value="Iniciar sessão">
            </div>
            <p>Não possui uma conta? <a href="register.php">Registe-se agora</a>.</p>
        </form>
    </div>
</body>
</html>
