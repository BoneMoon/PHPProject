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

  public function createBrawler()
  {
    $Brawlers = $this->model('Brawlers');

    $imagem = $_FILES["image"]["name"];
    $imagem_caminho = "assets/imgs/" . $imagem;
    move_uploaded_file($_FILES["image"]["tmp_name"], $imagem_caminho);
    $data = [
      "name" => $_POST["name"],
      "rarity" => $_POST["rarity"],
      "image" => $imagem_caminho,
      "role" => $_POST["role"],
      "speed" => $_POST["speed"],
      "health" => $_POST["health"]
    ];

    $res = $Brawlers->createBrawler($data);

    if (!$res) {
      header("Location: " . path("/brawler/criarBrawler"));
      die();
    }

    header("Location: " . path("/brawler"));
    die();
  }

  public function criarBrawler()
  {
    $this->view('brawler/creatBrawler');
  }

  public function deleteBrawler()
  {
    $id = $_POST["id"];
    $Brawlers = $this->model('Brawlers');
    $res = $Brawlers->RemoveBrawler($id);

    if (!$res) {
      header("Location: " . path("/brawler/get"));
      die();
    };

    header("Location: " . path("/brawler"));
    die();
  }

  public function atualizarBrawler($id)
  {
    $imagem = $_FILES["image"]["name"];
    $imagem_caminho = "assets/imgs/" . $imagem;
    move_uploaded_file($_FILES["image"]["tmp_name"], $imagem_caminho);

    $data = [
      "name" => $_POST["name"],
      "rarity" => $_POST["rarity"],
      "image" => $imagem_caminho,
      "role" => $_POST["role"],
      "speed" => $_POST["speed"],
      "health" => $_POST["health"]
    ];
    $Brawlers = $this->model('Brawlers');

    $res = $Brawlers->updateBrawler($data, $id);

    header("Location: " . path("/brawler"));
    die();
  }
  public function atualBrawler($id = null)
  {
    if (is_numeric($id)) {
      $Brawlers = $this->model('Brawlers');
      $data = $Brawlers::findById($id);

      if ($data === null) {
        return $this->pageNotFound();
      }

      $this->view('brawler/editBrawler', ['brawler' => $data]);
    } else {
      $this->pageNotFound();
    }
  }
}


// :: Scope Resolution Operator
// Utilizado para acesso às propriedades e métodos das classes
