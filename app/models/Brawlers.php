<?php

namespace app\models;

use app\core\Db;

class Brawlers
{
  /**
   * Método para obtenção do dataset de todos os brawlers
   *
   * @return   array
   */
  public static function findAll()
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT * FROM brawlers');
    return $response;
  }

  /**
   * Método para a obtenção de um brawler pelo id correspondente
   * @param    int     $id   Id. do brawler
   *
   * @return   array
   */
  public static function findById(int $id)
  {
    $conn = new Db();
    $response = $conn->execQuery('SELECT * FROM brawlers WHERE id = ?', array('i', array($id)));

    if (count($response) <= 0) {
      return null;
    } else {
      return $response[0];
    }
  }
}
