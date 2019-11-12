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

  public static function createBrawler($data)
  {
    $conn = new Db();
    return $res = $conn->execNonQuery('INSERT INTO brawlers
    (name, rarity, image, role, health, speed) 
    VALUES (?, ?, ?, ?, ?, ?)', ['ssssss', [
      $data["name"], $data["rarity"],
      $data["image"], $data['role'], $data["health"], $data["speed"]
    ]]);
  }

  public static function RemoveBrawler($id)
  {
    $conn = new Db();
    $querry = 'DELETE FROM brawlers WHERE id = ?';
    return $conn->execNonQuery($querry, ["i", [$id]]);
  }

  public static function updateBrawler($data, $id)
  {
    $conn = new Db();
    $query = 'UPDATE brawlers SET name= ?, rarity= ?, image= ?, 
    role= ?, health= ?, speed= ? ';
    return $conn->execNonQuery($query, ['ssssss', [
      $data["name"], $data["rarity"],
      $data["image"], $data["role"], $data["health"], $data["speed"]
    ]], ["i", ["id"]]);
  }
}
