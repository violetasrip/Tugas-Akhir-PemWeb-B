<?php

class Database{
    private $host = db_host;
    private $usn = db_usn;
    private $pass = db_pass;
    private $db_name = db_name;
    private $dbh
    private $query

    public function __construct(){
        $condb = 'mysql:host=' . $this->host . ';dbname='. $this->dbh_name;
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($condb, $this->usn, $this->pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($q){
        $this->query = $this->dbh->prepare($q);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->query->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->query->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->query->fetchAll(PDO::FETCH_ASSOC)
    }

    public function single(){
        $this->execute();
        return $this->query->fetch(PDO::FETCH_ASSOC)
    }
}