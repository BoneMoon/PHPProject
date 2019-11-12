<?php
use app\core\Controller;
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
}
// :: Scope Resolution Operator
// Utilizado para acesso às propriedades e métodos das classes