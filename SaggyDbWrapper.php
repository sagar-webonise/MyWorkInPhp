<?php
// Database{Mysql} wrapper using php

interface DbWrapper {
    public function getInstance($hostName, $userName, $password, $databaseName);

    public function select($fields);

    public function from($tableName);

    public function where($conditions);

    public function  limit($limit, $offset);

    public function  orderBy($fieldName, $enum);

    public function get();

    public function query($query);

    public function save($tableName, $setParameters, $conditions);

    public function delete($tableName, $conditions);
}

class SaggyDbWrapper implements DbWrapper {
    private $hostName;
    private $userName;
    private $password;
    private $databaseName;
    private $pdo;
    private $query;
    function __construct($hostName, $userName, $password,$databaseName) {
        $this->getInstance($hostName, $userName, $password, $databaseName);
        return $this;
    }

    public function getInstance($hostName, $userName, $password, $databaseName) {

        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->databaseName = $databaseName;
        $this->getDbObj();

    }


    public function getDbObj(){
        $pdo = new PDO("mysql:host=".$this->hostName.";dbname=".$this->databaseName.";",$this->userName,$this->password);
        $this->pdo = $pdo;

    }

    public function select($fields='*'){

        $fieldsString = $fields;
        if(is_array($fields)){
            $fieldsString = join(",",$fields);
        }else if($fields == null){
            $fieldsString = '*';
        }

        $fieldsString = "select ".$fieldsString." ";
        $this->query = $fieldsString;

    }

    public function from($tableNames=null){
        $tablesString = $tableNames;
        if(is_array($tableNames)){
            $tablesString = join(",",$tableNames);
        }else if($tableNames == null){
            $tablesString = '';
        }

        $tablesString = "from ".$tablesString." ";
        $this->query .= $tablesString;

    }


    public function where($conditions){

    }

    public function  limit($limit, $offset){

    }

    public function  orderBy($fieldName, $enum = "ASC"){

    }

    public function get(){

    }

    public function query($query){

    }

    public function save($tableName, $setParameters, $conditions){

    }

    public function delete($tableName, $conditions){

    }
}

?>