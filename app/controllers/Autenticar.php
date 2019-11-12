<?php

use app\core\Controller;

class Autenticar extends Controller
{
    public function login()
    {
        if (!empty($_SESSION['id_utilizador'])) {
            header('Location:path("/app/views/home/index.php)');
        }

        require_once("connection_params.php");
        $conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            trigger_error('A ligação à Base de Dados falhou: '  . $conn->connect_error, E_USER_ERROR);
        }

        $mensagem = "";

        // se(foi feito login)
        // NOTA PHP: a função empty verifica se determinada variável não está definida OU está vazia
        if (!empty($_POST['login'])) {

            // neste ponto a variável global $_POST["login"] está definida e tem valor
            // ir à base de dados extrair o utilizador ativo, com as credenciais introduzidas no formulário
            $sql = 'SELECT id_utilizador, nome FROM utilizador where ativo = 1 AND id_utilizador = ? AND palavra_passe = ?';

            $stmt = $conn->prepare($sql);
            if ($stmt === false) {
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
    }

    public function logout()
    {
        if (!empty($_POST['logout'])) {

            session_unset();
            session_destroy();
        }
    }

    public static function createUser()
    {
        $data = [
            "id_utlizador" => $_POST["id_utilizador"],
            "palavra_passe" => $_POST["palavra_passe"],
            "nome" => $_POST["nome"],
            "ativo" => $_POST["ativo"]
        ];

        $conn = new Db();
        return $conn->execQuery('INSERT INTO utilizador 
        (id_utilizador, plalavra_passe, nome, ativo) 
        VALUES(?, ?, ?, ?)', ['ssss', [
            $data["id_utilizador"],
            $data["palavra_passe"], $data["nome"], $data["ativo"]
        ]]);

        header("Location: " . path("brawler/login.php"));
        die();
    }

    public function criarUser()
    {
        $this->view("brawler/createUser");
    }
}
