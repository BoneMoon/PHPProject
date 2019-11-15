<?php
class Db {
  private $DBServer;
  private $DBUser;
  private $DBPass;
  private $DBName;

  private $conn;

  public function __construct() {
    $this->DBServer = 'localhost';
    $this->DBUser   = '';
    $this->DBPass   = '';
    $this->DBName   = 'brawlstars';
    $this->conn = new mysqli($this->DBServer, $this->DBUser, $this->DBPass, $this->DBName);
    $this->conn->set_charset("utf8");
  }

  /**
  * Método para a definição dos parâmetros para o prepared statement
  * @param  MySQLiStatement   $stmt         query "preparada".
  * @param  array             $parameters   array com tipos e respetivos valores (caso existam)
  */
  private function setParameters($stmt, array $parameters) {
    if (count($parameters)) {
      $types = $parameters[0];
      $values = $parameters[1];
      $stmt->bind_param($types, ...$values); // *1
    }
  }

  /**
  * Método para a execução do SQL
  * @param  string   $sql         instrução SQL
  * @param  array    $parameters  array de parâmetros
  *
  * @return array    $response    dataset ou ...
  */
  public function execQuery(string $sql, array $parameters = []) {
    $stmt = $this->conn->prepare($sql);
    $this->setParameters($stmt, $parameters);
    $stmt->execute();
    $result = $stmt->get_result();
    if (!is_bool($result)) {
      $response = $result->fetch_all(MYSQLI_ASSOC);
    } else {
      $nrows = $stmt->affected_rows;
      $response = $nrows;
    }
    return $response;
  }

  // *1
  // ... Operador splat
  // Uma das funções deste operador é transformar um array em parâmetros separados a passar para
  // determinado método/função (Argument Unpacking)

}
?>