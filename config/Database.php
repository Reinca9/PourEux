<?php

class Database{


  private $host;
  private $dbname;
  private $user;
  private $mdp;
  private $char;
  public $connexion;

  public function __construct($dbname, $user, $mdp, $host, $char = 'utf8'){

    $this->host = $host;
    $this->dbname = $dbname;
    $this->user = $user;
    $this->mdp = $mdp;
    $this->char = $char;
    $this->connect();
  }


  private function connect(){
    try{
      $this->connexion = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset={$this->char}", $this->user, $this->mdp);
    } catch(PDOException $e){
      echo 'Error '. $e->getMessage();
    }
  }



}

?>