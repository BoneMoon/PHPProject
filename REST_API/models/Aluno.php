<?php
class Aluno {

  private $numero;
  private $nome;
  private $grupo;
  private $observacoes;
  private $anoletivo;

  private $table;

  public function __construct() {
    $this->table = 'alunospw';
  }

  public function setData($numero, $nome, $grupo, $observacoes, $anoletivo) {
    $this->numero = $numero;
    $this->nome = $nome;
    $this->grupo = $grupo;
    $this->observacoes = $observacoes;
    $this->anoletivo = $anoletivo;
  }

  /**
  * Método para obtenção do dataset de todos os alunos
  *
  * @return   array
  */
  public function get() {
    $conn = new Db();
    $response = $conn->execQuery('SELECT numero, nome, grupo, observacoes, anoletivo FROM ' . $this->table);
    return $response;
  }

  /**
  * Método para a obtenção de um aluno pelo id (número) correspondente
  * @param    int     $id   Id. do aluno
  *
  * @return   array
  */
  public function getById(int $id) {
    $conn = new Db();
    $response = $conn->execQuery('SELECT numero, nome, grupo, observacoes, anoletivo FROM ' . $this->table . ' WHERE numero = ?', array('i', array($id)));
    return $response;
  }

  public function insert() {
    $conn = new Db();
    $response = $conn->execQuery('INSERT INTO ' . $this->table . ' 
    SET numero = ?, nome = ?, grupo = ?, observacoes = ?, anoletivo = ?', 
      array('issss', array($this->numero, $this->nome, $this->grupo, $this->observacoes, $this->anoletivo)));
    return $response;
  }

  public function update() {
    $conn = new Db();
    $response = $conn->execQuery('UPDATE ' . $this->table . ' 
    SET nome = ?, grupo = ?, observacoes = ?, anoletivo = ? WHERE numero = ?', 
      array('ssssi', array($this->nome, $this->grupo, $this->observacoes, $this->anoletivo, $this->numero)));
    return $response;
  }

  public function delete() {
    $conn = new Db();
    $response = $conn->execQuery('DELETE FROM ' . $this->table . ' 
    WHERE numero = ?', 
      array('i', array($this->numero)));
    return $response;
  }

}
?>
