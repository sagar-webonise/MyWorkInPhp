<?php

class Config{
   public $default = array(
        'host'=>'localhost',
        'user'=>'root',
        'password'=>'webonise6186',
        'dbName'=>'tta-cms'
    );

    public function getConf(){
        return $this->default;
    }
}
?>