<?php
// Database wrapper using php

interface DbWrapper {
    public function getInstance(string $hostName, string $userName, string $password, string $databaseName);

    public function select(array $Fields);

    public function from(array $tableName);

    public function where(array $conditions);

    public function  limit(integer $limit, integer $offset);

    public function  orderBy(string $fieldName, $enum);

    public function get();

    public function query(string $query);

    public function save(string $tableName, array $setParameters, array $conditions);

    public function delete(string $tableName, array $conditions);
}

class SaggyDbWrapper implements DbWrapper {
    private $hostName;
    private $userName;
    private $password;
    private $databaseName;
    private $dbo;

    function _construct(string $hostName, string $userName, string $password, string $databaseName) {
        $this->getInstance($hostName, $userName, $password, $databaseName);
        return $this;
    }

    public function getInstance(string $hostName, string $userName, string $password, string $databaseName) {

        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->databaseName = $databaseName;

        if(!$this->check('instanceParams')){
            echo "Sorry you should enter Host Name , User Name , Password , Database Name";
            return 0;
        }git
        $this->getDbObj();

        return 1;

    }

    public function check(string $checkStr){
        switch($checkStr){
            case 'instanceParams':
                if($this->hostName  && $this->userName && $this->password && $this->databaseName)
                    return true;
                else
                    return false;
                break;
        }
    }

    public function getDbObj(){
        print "Hii";
        $dbo = new PDO("mysql:host=".$this->hostName.";dbname=".$this->databaseName.";",$this->userName,$this->password);

    }

    public function select(array $Fields){

    }

    public function from(array $tableName){

    }

    public function where(array $conditions){

    }

    public function  limit(integer $limit, integer $offset){

    }

    public function  orderBy(string $fieldName, $enum = "ASC"){

    }

    public function get(){

    }

    public function query(string $query){

    }

    public function save(string $tableName, array $setParameters, array $conditions){

    }

    public function delete(string $tableName, array $conditions){

    }
}

?>