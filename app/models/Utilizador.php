<?php

namespace app\models;

use app\core\Db;

class Utilizador
{
    public static function createUser()
    {

        $conn = new Db();
        return $conn->execQuery('INSERT INTO utilizador (id_utilizador, plalavra_passe, nome, fotografia, ativo) 
                                VALUES(?, ?, ?, ?, ?)', ['sssss', []]);
    }
}
