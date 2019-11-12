<?php

namespace app\models;

use app\core\Db;

class Utilizador
{
    public static function findByEmail(string $email)
    {
        $conn = new Db();
        $response = $conn->execQuery('SELECT * FROM utilizador WHERE id_utilizador = ?', array('s', array($email)));

        if (count($response) <= 0) {
            return null;
        } else {
            return $response[0];
        }
    }
}
