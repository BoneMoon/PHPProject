<?php

use app\core\Controller;
use app\core\Db;

class Brawler extends Controller
{
  /**
   * Invocação da view index.php
   */
  public function index()
  {
    $Brawlers = $this->model('Brawlers'); // é retornado o model Brawlers()
    $data = $Brawlers::findAll();
    /*
    $objBrawlers = new Brawlers();
    $data = $objBrawlers->findAll();
    ------------------------------------------------------
    $varBrawlers = "Brawlers";
    $data = $varBrawlers::findAll();
    */
    $this->view('brawler/index', ['brawlers' => $data]);
  }

  /**
   * Invocação da view get.php
   *
   * @param  int   $id   Id. do brawler
   */
  public function get($id = null)
  {
    if (is_numeric($id)) {
      $Brawlers = $this->model('Brawlers');
      $data = $Brawlers::findById($id);

      if ($data === null) {

        return $this->pageNotFound();
      }

      $this->view('brawler/get', ['brawler' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  // public function creatBrawler($data){
  //   $Brawlers = $this->model('Brawlers');
  
  //     $this->view('brawler/creatBrawler', ['brawler' => $data]);
  //   } else {
  //     $this->pageNotFound();
  //   }
  // }

  public function createBrawler(){
    $data = [
      "name" => $_POST["name"],
      "rarity" => $_POST["rarity"],
      // "image" => $_FILES["image"],
      "role" => $_POST["role"],
      "speed" => $_POST["speed"],
      "health" => $_POST["health"]
  ];


    $conn = new Db();
    $res = $conn->execNonQuery('INSERT INTO brawlers
    (name, rarity, role, health, speed) 
    VALUES (?, ?, ?, ?, ?)', ['sssss',[$data["name"], $data["rarity"], 
    $data['role'], $data["health"], $data["speed"]]]);

    header("Location: " . path("/"));
    die();
  }

  public function criarBrawler(){
    $this->view('brawler/creatBrawler');
  }
}


// :: Scope Resolution Operator
// Utilizado para acesso às propriedades e métodos das classes
