<?php

use app\core\Controller;
use app\core\Db;
use app\models\Utilizador;

class Autenticar extends Controller
{
    public function login()
    {
        $this->view("session/login");
    }

    public function loginPOST()
    {
        $email = $_POST["id_utilizador"];
        $palavra_passe = $_POST["palavra_passe"];

        if (empty($email) || empty($palavra_passe)) {
            header("Location: " . path("/autenticar/login"));
            die();
        }

        $data = Utilizador::findByEmail($email);

        if ($data === null) {
            header("Location: " . path("/autenticar/login"));
            die();
        }

        if ($palavra_passe !== $data["palavra_passe"]) {
            header("Location: " . path("/autenticar/login"));
            die();
        }

        $_SESSION["userId"] = $data["id_utilizador"];
        header("Location: " . path("/"));
        die();
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
            "id_utilizador" => $_POST["id_utilizador"],
            "palavra_passe" => $_POST["palavra_passe"],
            "nome" => $_POST["nome"],
            "ativo" => true
        ];

        $conn = new Db();
        $res = $conn->execNonQuery('INSERT INTO utilizador 
        (id_utilizador, palavra_passe, nome, ativo) 
        VALUES (?, ?, ?, ?)', ['sssb', [
            $data["id_utilizador"],
            $data["palavra_passe"], $data["nome"], $data["ativo"]
        ]]);

        header("Location: " . path("/autenticar/login"));
        die();
    }

    public function criarUser()
    {
        $this->view("session/createUser");
    }
}
