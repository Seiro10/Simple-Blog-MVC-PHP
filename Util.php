<?php

use App\CFG\Config;

class Util
{

    private $db_instance;

    public function getView($viewName){

        $this->_get($viewName, 'View');

    }

    public function getModel($modelName){

        $model = 'Model';
        $rdr = '\\App\\Model\\' . $modelName. ''. $model;
        return new $rdr($this->getDB());
    }

    public function _get($fileName, $typeName){

    $rdr = ROOT_PATH. 'src/' .$typeName. '/'. $fileName. ''. $typeName. '.php';

    if (is_file($rdr)) {

            include $rdr;
    }else{

        exit('The "' . $rdr . '" file doesn\'t exist');
    }

    }


    public function getDB(){

        if (is_null($this->db_instance)){

            $this->db_instance = new \App\DB\SQLDB();

        }

        return $this->db_instance;
    }



}